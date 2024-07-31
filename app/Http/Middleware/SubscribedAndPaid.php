<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SubscribedAndPaid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (env('APP_ENV') != 'local') {
            $subscription = Subscription::where('user_id', auth()->id())->latest()->first();
            if (!$subscription) {
                alert('Error', 'Subscription not found!', 'error');
                return to_route('subscription.index');
            }

            if ($subscription->is_paid == 0) {
                alert('Error', 'Subscription payment is incomplete!', 'error');
                return to_route('subscription.index');
            }
        }

        return $next($request);
    }
}
