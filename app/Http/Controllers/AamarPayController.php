<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Package;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Services\AamarPayService;
use Illuminate\Support\Facades\DB;
use App\Models\SubscriptionPayment;

class AamarPayController extends Controller
{
    public function __construct(protected AamarPayService $aamarPayService)
    {
        $this->aamarPayService = $aamarPayService;
    }

    private function subscriptionUpdate($tran_id)
    {
        // update subscription status
        $payment = SubscriptionPayment::where('transaction_id', $tran_id)->first();
        $subscription = Subscription::with('package_details')->find($payment->subscription_id);
        if ($payment->is_extension_payment == 1) {
            $subscription->ending_date = Carbon::parse($subscription->ending_date)->addDays($subscription->package_details->duration);
        }
        $subscription->is_paid = 1;
        $subscription->save();

        return true;
    }

    public function makePayment(Request $request)
    {
        $subscription = Subscription::find($request->subscription_id);
        $user = User::find($subscription->user_id);
        $package = Package::find($subscription->package_id);

        $payload = [
            'success_url' => route('aamar-pay.success'),
            'fail_url' => route('aamar-pay.fail'),
            'cancel_url' => route('aamar-pay.cancel'),
            'amount' => $package->price,
            'currency' => 'BDT',
            'cus_name' => $user->name,
            'cus_email' => $user->email,
            'cus_phone' => $user->phone,
            'desc' => $package->title,
            'opt_a' => 'Trnx_' . rand(111111, 999999),
        ];

        #Before  going to initiate the payment order status need to insert or update as Pending.
        DB::table('subscription_payments')
            ->where('transaction_id', $payload['opt_a'])
            ->updateOrInsert([
                'subscription_id' => $subscription->id,
                'name' => $payload['cus_name'],
                'email' => $payload['cus_email'],
                'phone' => $payload['cus_phone'],
                'amount' => $payload['amount'],
                'status' => 'Pending',
                'address' => null,
                'transaction_id' => $payload['opt_a'],
                'currency' => $payload['currency'],
                'is_extension_payment' => $request->is_extension_payment ? true : false,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        $paymentUrl = $this->aamarPayService->paymentRequest($payload);

        return redirect()->away($paymentUrl);
    }

    public function success(Request $request)
    {
        $response = $this->aamarPayService->verifyPayment($request);
        if ($response) {
            DB::table('subscription_payments')
                ->where('transaction_id', $response['opt_a'])
                ->update([
                    'status' => 'Complete',
                    'payload_response' => json_encode($response),
                ]);
            $this->subscriptionUpdate($response['opt_a']);

            toast('Transaction is successfully Completed', 'success');
            return to_route('subscription.index');
        } else {
            toast('Payment Failed', 'error');
            return to_route('subscription.index');
        }
    }

    public function fail(Request $request)
    {
        DB::table('subscription_payments')
            ->where('transaction_id', $request['opt_a'])
            ->update([
                'status' => 'Complete',
                'payload_response' => json_encode($request),
            ]);

        toast('Payment Failed', 'error');
        return to_route('subscription.index');
    }

    public function cancel()
    {
        toast('Payment Cancelled', 'error');
        return to_route('subscription.index');
    }
}
