<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Package;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    public function index()
    {
        $packages = Package::where('status', 1)->get();
        return view('customer.subscription.index', compact(
            'packages'
        ));
    }

    public function create(Request $request)
    {
        $user = User::find(auth()->id());
        $package = Package::find($request->package);

        // check if have subscription
        if ($user->subscription_details) {
            $user->subscription_details->update([
                'status' => 0
            ]);
        }

        // create subscription
        $this->store($user, $package);

        // return back
        alert('Success', 'Subscription created successfully!', 'success');
        return redirect()->back();
    }

    public function store($user, $package)
    {
        // create subscription
        $subscription = new Subscription();
        $subscription->user_id = $user->id;
        $subscription->package_id = $package->id;
        $subscription->starting_date = date('Y-m-d');
        $subscription->ending_date = date('Y-m-d', strtotime('+' . $package->duration . 'days'));
        $subscription->is_paid = $package->id == 1 ? 1 : 0;
        $subscription->save();

        // return
        return true;
    }

    public function extend($id)
    {
        $subscription = Subscription::with('package_details')->findOrFail($id);
        $subscription->ending_date = Carbon::parse($subscription->ending_date)->addDays($subscription->package_details->duration);
        $subscription->save();

        alert('Success', 'Successfully Completed', 'success');
        return back();
    }
}
