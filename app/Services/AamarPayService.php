<?php

namespace App\Services;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AamarPayService
{
    protected $store_id;
    protected $signature_key;
    protected $base_url;

    public function __construct()
    {
        $this->store_id = env('AAMARPAY_STORE_ID', 'aamarpaytest');
        $this->signature_key = env('AAMARPAY_SIGNATURE_KEY', 'dbb74894e82415a2f7ff0ec3a97e4183');
        $this->base_url = env('AAMARPAY_MODE') == 'live' ? 'https://secure.aamarpay.com' : 'https://sandbox.aamarpay.com';
    }


    public function paymentRequest(array $payload)
    {
        // demo payload structure
        // $payload = [
        //     'success_url' => 'https://example.com/success',
        //     'fail_url' => 'https://example.com/fail',
        //     'cancel_url' => 'https://example.com/cancel',
        //     'amount' => '100',
        //     'currency' => 'BDT',
        //     'cus_name' => 'John Doe',
        //     'cus_email' => 'XpXkM@example.com',
        //     'cus_phone' => '1234567890',
        // ];

        $tran_id = $payload['tran_id'] ?? "Trnx_" . rand(111, 999);
        $url = $this->base_url . "/jsonpost.php";

        // Define your request data
        $data = [
            "store_id" => $this->store_id,
            "tran_id" => $tran_id,
            "success_url" => $payload['success_url'],
            "fail_url" => $payload['fail_url'],
            "cancel_url" => $payload['cancel_url'],
            "amount" => $payload['amount'],
            "currency" => $payload['currency'] ?? 'BDT',
            "signature_key" => $this->signature_key,
            "desc" => $payload['desc'] ?? "payment description",
            "cus_name" => $payload['cus_name'],
            "cus_email" => $payload['cus_email'],
            "cus_phone" => $payload['cus_phone'] ?? '1234567890',
            "cus_add1" => "...",
            "cus_add2" => "...",
            "cus_city" => "...",
            "cus_state" => "...",
            "cus_postcode" => "...",
            "cus_country" => "...",
            "type" => "json",
            "opt_a" => $payload['opt_a'] ?? null,
            "opt_b" => $payload['opt_b'] ?? null,
            "opt_c" => $payload['opt_c'] ?? null,
            "opt_d" => $payload['opt_d'] ?? null,
        ];

        // Initialize cURL session
        $ch = curl_init();

        // Set cURL options
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

        // Execute cURL session
        $response = curl_exec($ch);
        Log::info($response);

        // Check for cURL errors
        if (curl_errno($ch)) {
            Log::error('cURL Error:', [
                'message' => curl_error($ch),
            ]);

            curl_close($ch);
            return redirect($payload['fail_url']);
        }

        // Close cURL session
        curl_close($ch);

        // Process the response
        try {
            $responseObj = json_decode($response);

            if (isset($responseObj->payment_url) && !empty($responseObj->payment_url)) {
                $paymentUrl = $responseObj->payment_url;

                // Redirect to AamarPay
                return $paymentUrl;
            } else {
                return redirect($payload['fail_url']);
            }
        } catch (Exception $e) {
            Log::error('Response Decoding Error:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTrace(),
            ]);

            return redirect($payload['fail_url']);
        }
    }


    public function verifyPayment(Request $request)
    {
        try {
            $request_id = $request->mer_txnid;

            //verify the transection using Search Transection API 
            $url = "$this->base_url/api/v1/trxcheck/request.php?request_id=$request_id&store_id=aamarpaytest&signature_key=dbb74894e82415a2f7ff0ec3a97e4183&type=json";

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));

            $response = curl_exec($curl);

            curl_close($curl);

            return json_decode($response, true);
        } catch (Exception $e) {
            Log::error('Response Decoding Error:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTrace(),
            ]);
            return false;
        }
    }

    public function success(Request $request)
    {
        return $this->verifyPayment($request);
    }

    public function fail(Request $request)
    {
        return $request;
    }

    public function cancel()
    {
        return 'Canceled';
    }
}
