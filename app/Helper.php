<?php

use App\Models\CustomDomain;
use App\Models\Subscription;
use App\Models\Template\UserTemplate;
use App\Models\TemplateSeoTag;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

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

if (!function_exists("fetchImage")) {
    function fetchImage($path, $alter_path)
    {
        if ($path) {
            $link = asset('storage/' . $path);
        } else {
            $link = asset($alter_path);
        }

        return $link;
    }
}

if (!function_exists('trackingApi')) {
    function trackingApi($userTemplateId)
    {
        $userTemplate = UserTemplate::with('trackingApi')->find($userTemplateId);

        if ($userTemplate && $userTemplate->trackingApi) {
            $fbPixel = $userTemplate->trackingApi->fb_pixel_value ?? '' . PHP_EOL;
            $gtmHead = $userTemplate->trackingApi->gtm_head_value ?? '' . PHP_EOL;
            $gtmBody = $userTemplate->trackingApi->gtm_body_value ?? '' . PHP_EOL;

            return [
                'head_code' => $gtmHead . $fbPixel,
                'body_code' => $gtmBody
            ];
        }

        return [
            'head_code' => '',
            'body_code' => ''
        ];
    }
}

if (!function_exists('renderSeoTags')) {
    function renderSeoTags($userTemplateId)
    {
        $userTemplate = UserTemplate::with('template')->find($userTemplateId);
        $template = TemplateSeoTag::where('user_template_id', $userTemplate->id)->first();
        if ($template && $template->tags) {
            $tags = json_decode($template->tags, true);

            $html = '';
            foreach ($tags as $tag => $value) {
                if (str_contains($tag, 'og:')) {
                    if ($tag === 'og:image') {
                        $value = Str::startsWith($value, ['http', 'https'])
                        ? $value
                        : asset('storage/' . $value);
    
                        $html .= "<meta property=\"{$tag}\" content=\"{$value}\">" . PHP_EOL;
                    } else {
                        $html .= "<meta property=\"{$tag}\" content=\"{$value}\">" . PHP_EOL;
                    }
                } elseif ($tag === 'title') {
                    $html .= "<title>{$value}</title>" . PHP_EOL;
                } elseif ($tag === 'description') {
                    $html .= "<meta name=\"description\" content=\"{$value}\">" . PHP_EOL;
                } else {
                    $html .= "<meta name=\"{$tag}\" content=\"{$value}\">" . PHP_EOL;
                }
            }

            return $html;
        }

        return '';
    }
}

// Get Domain name and check it
if (!function_exists('domainCheck')) {

    function domainCheck()
    {
        $customDomain = CustomDomain::with('userTemplate')->where('domain_name',request()->getHost())->first();
        return $customDomain->userTemplate->company_slug ?? false;

    }
}
// Reserve sub domain list
if (!function_exists('reservedSubDomain')) {

    function reservedSubDomain()
    {
        return ['1com','app', 'main'] ;
    }
}
