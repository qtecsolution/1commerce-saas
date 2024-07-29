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

if (!function_exists('orderStatusList')) {
    function orderStatusList()
    {
        return [
            ['value' => 1, 'label' => 'Pending'],
            ['value' => 2, 'label' => 'Processing'],
            ['value' => 3, 'label' => 'Delivered'],
            ['value' => 4, 'label' => 'Cancelled'],
            ['value' => 5, 'label' => 'Follow Up'],
            ['value' => 6, 'label' => 'Returned'],
        ];
    }
}

if (!function_exists('orderStatusText')) {

    function orderStatusText($status)
    {
        if ($status == 1) {
            return "Pending";
        } elseif ($status == 2) {
            return "Processing";
        } elseif ($status == 3) {
            return "Delivered";
        } elseif ($status == 4) {
            return "Cancelled";
        } elseif ($status == 5) {
            return "Follow Up";
        } elseif ($status == 6) {
            return "Returned";
        } else {
            return "Unknown";
        }
    }
}

if (!function_exists("orderStatusColor")) {
    function orderStatusColor($status)
    {
        if ($status == 1) {
            $color = "secondary";
        } elseif ($status == 2) {
            $color = "success";
        } elseif ($status == 3) {
            $color = "primary";
        } elseif ($status == 4) {
            $color = "info";
        } elseif ($status == 5) {
            $color = "danger";
        } elseif ($status == 6) {
            $color = "warning";
        } else {
            $color = "light";
        }

        return $color;
    }
}
