<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\User\SubscriptionController;
use App\Models\Package;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    // function to sign-in user
    public function sign_in(Request $request)
    {
        // check request method
        if ($request->isMethod('post')) {
            // data validation
            $request->validate([
                'username' => 'required|exists:users,username',
                'password' => 'required'
            ]);

            // login user
            $credentials = $request->only('username', 'password');
            if (Auth::attempt($credentials, true)) {
                $request->session()->regenerate();

                if (Auth::user()->is_admin == 1) {
                    // return to admin dashboard
                    return redirect()->route('admin_dashboard');
                } elseif (Auth::user()->is_admin == 0) {
                    // return to user dashboard
                    return redirect()->route('user_dashboard');
                } else {
                    // sign-out and return back
                    Auth::logout();
                    return redirect()->back();
                }
            } else {
                // return back
                return redirect()->back();
            }
        } else {
            // return to login
            return view('auth.sign-in');
        }
    }

    // function to sign-up user
    public function sign_up(Request $request)
    {
        // check request method
        if ($request->isMethod('post')) {
            // data validation
            $request->validate([
                'name' => 'required',
                'phone' => 'required|unique:users,phone',
                'email' => 'required|unique:users,email',
                'password' => 'required|min:8',
            ]);

            // create user
            $user = new User();
            $user->name = $request->input('name');
            $user->username = $request->input('phone');
            $user->phone = $request->input('phone');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->save();

            // if have selected package
            if (session()->has('selected_package')) {
                $package = Package::find(session('selected_package'));

                // if package is valid
                if (!empty($package)) {
                    // create subscription
                    $subscription = new SubscriptionController();
                    $subscription->store($user, $package);
                }
            }

            // return to sign-in
            return redirect()->route('sign_in');
        } else {
            return view('auth.sign-up');
        }
    }

    // function to sign-out user
    public function sign_out()
    {
        // sign-out
        Auth::logout();

        // return to home
        return redirect()->route('web_packages');
    }

    // function to get user profiles
    public function user_profiles()
    {
        $shop = Shop::where('user_id', auth()->id())->first();
        return view('customer.setting.profiles', compact('shop'));
    }

    // function to update user profile
    public function updateProfile(Request $request)
    {
        // get user data
        $user = User::find(auth()->id());

        // data validation
        $request->validate([
            'name' => 'required',
            'phone' => 'required|unique:users,phone',
            'email' => 'required|unique:users,email',
        ]);

        // function to user profile update and create
        if ($user) {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'nid_number' => $request->nid_number,
            ]);

            if ($request->hasFile('photo')) {
                $request->file('photo')->store('public/avatars');
                $path = 'avatars/' . $request->file('photo')->hashName();

                $user->photo = $path;
                $user->save();
            }
        }

        toast('Profile updated successfully.', 'success');
        return redirect()->back();
    }

    public function updatePassword(Request $request)
    {
        // check method
        $user = User::find(auth()->id());

        // function to match the current password
        if (!Hash::check($request->input('current_password'), $user->password)) {
            return redirect()->back()->with('error', 'Current password is not matched.');
        }
        // validation
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed|different:current_password',
        ]);

        $user->update([
            'password' => bcrypt($request->new_password)
        ]);

        toast('Password updated successfully.', 'success');
        return redirect()->back();
    }
}
