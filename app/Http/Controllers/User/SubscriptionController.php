<?php

namespace App\Http\Controllers\User;

use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\User;

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
            // delete old subscription
            // $user->subscription_details->delete();

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
        $subscription->save();

        // return
        return true;
    }
}
