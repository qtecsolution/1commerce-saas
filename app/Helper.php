<?php

use App\Models\Subscription;
use Illuminate\Support\Facades\Artisan;

if (!function_exists('isSubscriptionPaid')) {

    function isSubscriptionPaid()
    {
        $subscription = Subscription::where('user_id', auth()->id())->first();
        if ($subscription) {
            return $subscription->is_paid == 1 ? true : false;
        }
        return false;
    }
}
