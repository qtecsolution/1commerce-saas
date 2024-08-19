<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OrderDynamicField;
use App\Models\OrderFormAdditionalField;
use App\Models\Template\UserTemplate;
use App\Models\Template\SeedeeTemplate;
use App\Models\Template\UlaunchTemplate;
use App\Models\Template\CycleTemplate;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;

class ShopController extends Controller
{
    public function index($subdomain)
    {
        return $this->livePreview($subdomain);
    }

    public function livePreview($slug)
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
            // dd($seedee);
            return view('template.live.seedee', compact('seedee', 'userTemplate'));
        }
        else if ($userTemplate->template_id == 3) {
            $cycle = CycleTemplate::with(['steps', 'features'])
                ->where('user_id', $userTemplate->user_id)
                ->firstOrFail();
            // dd($seedee);
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

            $shipping = $template->shipping_cost ?? 0;

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

            Alert::success("Yahoo!", "You order is submitted successfully. Our agent will contact you soon.");
            return back();
        } catch (ValidationException $e) {
            // Redirect back with the input and the fragment identifier
            return redirect()
                ->back()
                ->withErrors($e->validator)
                ->withInput()
                ->withFragment('order');
        }
    }
}
