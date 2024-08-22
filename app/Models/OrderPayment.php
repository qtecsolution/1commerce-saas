<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPayment extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['decrypted_payload'];

    public function getDecryptedPayloadAttribute()
    {
        // Decode the JSON payload
        $payload = json_decode($this->response_payload, true);

        // Define keys to remove
        $keysToRemove = [
            "mer_txnid",
            "risk_title",
            "risk_level",
            "desc",
            "cus_add1",
            "cus_add2",
            "cus_city",
            "cus_state",
            "cus_postcode",
            "cus_country",
            "cus_fax",
            "ship_name",
            "ship_add1",
            "ship_add2",
            "ship_city",
            "ship_state",
            "ship_postcode",
            "ship_country",
            "merchant_id",
            "store_id",
            "error_code",
            "error_title",
            "bin_country",
            "bin_issuer",
            "bin_cardtype",
            "bin_cardcategory",
            "rec_amount",
            "processing_ratio",
            "processing_charge",
            "ip",
            "currency_merchant",
            "convertion_rate",
            "opt_a",
            "opt_b",
            "opt_c",
            "opt_d",
            "verify_status",
            "call_type",
            "email_send",
            "doc_recived",
            "checkout_status",
            "amount_bdt",
            "amount_currency"
        ];

        // Remove specified keys from the payload
        if (is_array($payload)) {
            foreach ($keysToRemove as $key) {
                unset($payload[$key]);
            }
        }

        return json_encode($payload);
    }
}
