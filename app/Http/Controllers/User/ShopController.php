<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\OrderDynamicField;
use App\Services\AamarPayService;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontEnd\WebController;
use App\Http\Controllers\User\Finance\TransactionController;
use App\Models\Template\UserTemplate;
use App\Models\Template\CycleTemplate;
use App\Models\Template\SeedeeTemplate;
use App\Models\OrderFormAdditionalField;
use App\Models\OrderPayment;
use App\Models\Template\UlaunchTemplate;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;

class ShopController extends Controller
{
    public function __construct(
        protected AamarPayService $aamarPayService,
        protected TransactionController $transactionController,
    ) {
        $this->aamarPayService = $aamarPayService;
        $this->transactionController = $transactionController;
    }

    public function index($subdomain)
    {
        // Validate that the subdomain is permissible and does not conflict with reserved subdomains.
        $IsAllowed = !in_array($subdomain, reservedSubDomain());
        if ($IsAllowed) {
            return $this->livePreview($subdomain);
        } else {
            // If match with reserved subdomain, it returns global home page 
            return WebController::index();
        }
    }

    public static function livePreview($slug)
    {
        $userTemplate = UserTemplate::with(['template', 'fields'])->where('company_slug', $slug)->firstOrFail();
        if ($userTemplate->template_id == 1) {
            $ulaunch = UlaunchTemplate::with(['steps', 'features', 'testimonials'])
                ->where('user_id', $userTemplate->user_id)
                ->firstOrFail();

            return view('template.live.ulaunch', compact('ulaunch', 'userTemplate'));
        } else if ($userTemplate->template_id == 2) {
            $seedee = SeedeeTemplate::with(['steps', 'features'])
                ->where('user_id', $userTemplate->user_id)
                ->firstOrFail();
            return view('template.live.seedee', compact('seedee', 'userTemplate'));
        } else if ($userTemplate->template_id == 3) {
            $cycle = CycleTemplate::with(['steps', 'features'])
                ->where('user_id', $userTemplate->user_id)
                ->firstOrFail();
            return view('template.live.cycle', compact('cycle', 'userTemplate'));
        }

        abort(404);
    }

    public function placeOrder(Request $request)
    {
        try {
            $request->validate([
                'user_template_id' => 'required|exists:user_templates,id',
                'customer_name' => 'required',
                'customer_phone' => 'required|regex:/(01)[0-9]{9}/|max:11',
                'customer_address' => 'required',
                'quantity' => 'required|integer|min:1',
                'shipping_cost' => 'nullable',
            ]);

            $template = UserTemplate::findOrFail($request->user_template_id);

            $shipping = $request->shipping_cost ?? 0;

            $order = Order::create([
                'user_template_id' => $request->user_template_id,
                'customer_name' => $request->customer_name,
                'customer_phone' => $request->customer_phone,
                'customer_address' => $request->customer_address,
                'quantity' => $request->quantity,
                'product_name' => $template->product_name,
                'product_price' => $template->product_price,
                'shipping_cost' => $shipping,
                'total_amount' => round(($template->product_price * $request->quantity) + $shipping, 2),
                'currency' => $template->product_currency,
            ]);

            // Process dynamic fields
            $dynamicFields = $request->except([
                '_token',
                'delivery-area',
                'user_template_id',
                'customer_name',
                'customer_phone',
                'customer_address',
                'quantity',
                'product_name',
                'product_price',
                'shipping_cost',
                'total_amount',
                'currency'
            ]);

            foreach ($dynamicFields as $key => $value) {
                $record = OrderFormAdditionalField::where('user_template_id', $order->user_template_id)
                    ->where('name', $key)
                    ->first();

                if (is_array($value)) {
                    $value = json_encode($value);
                }

                OrderDynamicField::create([
                    'order_id' => $order->id,
                    'value' => $value,
                    'title' => $record->title,
                    'name' => $record->name,
                    'type' => $record->type,
                    'options' => $record->options
                ]);
            }

            // Alert::success("Yahoo!", "You order is placed successfully. Our agent will contact you soon.");
            // return back();
            return to_route('order_placed', $order->id);
        } catch (ValidationException $e) {
            // Redirect back with the input and the fragment identifier
            return redirect()
                ->back()
                ->withErrors($e->validator)
                ->withInput()
                ->withFragment('order');
        }
    }

    public function orderPlaced($order_id)
    {
        $order = Order::with('userTemplate')->findOrFail($order_id);
        $status = request('status');

        return view('front-end.order.placed', compact('order'));
    }

    public function orderPayment($order_id)
    {
        $order = Order::with('userTemplate')->findOrFail($order_id);

        $payload = [
            'success_url' => route('order_payment_success'),
            'fail_url' => route('order_payment_fail'),
            'cancel_url' => route('order_placed', $order->id) . '?status=canceled',
            'amount' => $order->total_amount,
            'currency' => 'BDT',
            'cus_name' => $order->customer_name,
            'cus_email' => null,
            'cus_phone' => $order->customer_phone,
            'desc' => @$order->userTemplate->product_name,
            'opt_a' => 'Trnx_' . rand(111111, 999999),
        ];

        OrderPayment::create([
            'order_id' => $order->id,
            'transaction_id' => $payload['opt_a'],
            'payment_method' => 'one_wallet',
            'amount' => $payload['amount'],
            'status' => 0,
        ]);

        $paymentUrl = $this->aamarPayService->paymentRequest($payload);
        return redirect()->away($paymentUrl);
    }

    public function paymentSuccess(Request $request)
    {
        $response = $this->aamarPayService->verifyPayment($request);
        $payment = OrderPayment::where('transaction_id', $response['opt_a'])->first();;
        if ($response) {
            $payment->update([
                'status' => 1,
                'response_payload' => json_encode($response),
            ]);
            $order = Order::with('userTemplate')->find($payment->order_id);
            // code to update user wallet
            if ($order->userTemplate->userWallet) {
                $this->transactionController->debitTransaction($order->userTemplate->userWallet->id, $payment);
            }
            // code to update user wallet

            Alert::success("Great !", "You payment is successful. Our agent will contact you soon.");
            if (@$order->userTemplate->company_slug) {
                return to_route('live_preview', $order->userTemplate->company_slug);
            }
            return redirect('/');
        } else {
            return to_route('order_placed', ['order_id' => $payment->order_id, 'status' => 'failed']);
        }
    }

    public function paymentFail(Request $request)
    {
        $payment = OrderPayment::where('transaction_id', $request['opt_a'])->first();
        $payment->update([
            'status' => 2,
            'response_payload' => json_encode($request),
        ]);

        return to_route('order_placed', ['order_id' => $payment->order_id, 'status' => 'failed']);
    }
}
