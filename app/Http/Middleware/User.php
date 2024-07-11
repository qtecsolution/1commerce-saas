<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Alert;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // chekc the user is authenticated or not
        if (Auth::check() && Auth::user()->is_admin == 0) {
            // check the user is subscribed or not
            $subscription_details = auth()->user()->subscription_details;
            if (!is_null($subscription_details)) {
                // check the subscription is active or not
                if ($subscription_details->status == 1) {
                    $start = strtotime($subscription_details->starting_date);
                    $end = strtotime($subscription_details->ending_date);
                    $today = strtotime(date('Y-m-d'));

                    // check ther users subscription period
                    if ($start <= $today && $end >= $today) {
                        return $next($request);
                    } else {
                        // return to subscription
                        return redirect()->route('web_packages');
                    }
                }

                // Alert for block subscription
                Auth::logout();
                Alert::error('Account Blocked!', 'To violate terms, your subscription is blocked. Contact support for further information.');
            } else {
                // return to subscription
                return redirect()->route('web_packages');
            }
        }

        // return to sign-in page
        return redirect()->route('sign_in');
    }
}
