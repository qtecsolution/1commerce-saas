<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use App\Http\Controllers\Controller;
use App\Models\UserWallet;

class PaymentMethodController extends Controller
{
    public function updateOneWallet(Request $request)
    {
        UserWallet::firstOrCreate(
            [
                'user_id' => auth()->id(),
            ],
            [
                'security_code' => rand(10000, 99999),
                'status' => 1
            ]
        );

        PaymentMethod::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'user_template_id' => $request->user_template_id,
                'name' => 'one_wallet',
            ],
            [
                'status' => $request->status
            ]
        );

        toast('Updated successfully.', 'success');
        return back()->withFragment('payment_methods');
    }

    public function updateSslCommerz(Request $request)
    {
        PaymentMethod::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'user_template_id' => $request->user_template_id,
                'name' => 'ssl_commerz',
            ],
            [
                'credentials' => json_encode([
                    'store_id' => $request->store_id,
                    'store_password' => $request->store_password,
                    'test_mode' => $request->sandbox ? true : false,
                ]),
                'status' => $request->status
            ]
        );

        toast('Updated successfully.', 'success');
        return back()->withFragment('payment_methods');
    }

    public function updateAamarPay(Request $request)
    {
        PaymentMethod::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'user_template_id' => $request->user_template_id,
                'name' => 'aamar_pay',
            ],
            [
                'credentials' => json_encode([
                    'store_id' => $request->store_id,
                    'signature_key' => $request->signature_key,
                    'test_mode' => $request->sandbox ? true : false,
                ]),
                'status' => $request->status
            ]
        );

        toast('Updated successfully.', 'success');
        return back()->withFragment('payment_methods');
    }
}
