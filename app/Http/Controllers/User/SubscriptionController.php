<?php

namespace App\Http\Controllers\User;

use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\User;
use Alert;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::where('status', 1)->get();
        return view('customer.subscription.index', compact(
            'packages'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
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

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(Subscription $subscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscription $subscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subscription $subscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscription $subscription)
    {
        //
    }
}
