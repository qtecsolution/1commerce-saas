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
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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
                'password' => 'required|min:8|confirmed',
                'password_confirmation' => 'required|min:8',
                'package_id' => 'required|exists:packages,id',
            ]);

            // create user
            $user = new User();
            $user->name = $request->input('name');
            $user->username = $request->input('email');
            $user->phone = $request->input('phone');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->save();

            $package = Package::find($request->input('package_id'));

            // if package is valid
            if (!empty($package)) {
                // create subscription
                $subscription = new SubscriptionController();
                $subscription->store($user, $package);
            }

            // sign-in
            Auth::login($user);
            $request->session()->regenerate();

            // return to user dashboard
            return redirect()->route('user_dashboard');
        } else {
            // check selected package
            if (session()->has('selected_package')) {
                // return to sign-up
                return view('auth.sign-up');
            } else {
                toast('Select a package to sign-up.', 'Info');

                // return to home
                return redirect()->route('web_packages');
            }
        }
    }

    // function to sign-out user
    public function sign_out()
    {
        // sign-out
        Session::flush();
        Auth::logout();

        // return to home
        toast('Sign-out successfully.', 'Info');
        return to_route('web.home');
    }

    // show user profile
    public function user_profile()
    {
        return view('customer.setting.profile');
    }

    // update user profile
    public function updateProfile(Request $request)
    {
        // validation
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => [
                'required',
                'max:11',
                'regex:/^(01)[0-9]{9}$/',
                'unique:users,phone,' . auth()->id()
            ],
            'email' => 'required|email|unique:users,email,' . auth()->id(),
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->withFragment('user_profile');
        }

        // update user
        $user = User::find(auth()->id());
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

        // return back
        toast('Profile updated successfully.', 'success');
        return redirect()->back()->withFragment('user_profile');
    }

    // update user password
    public function updatePassword(Request $request)
    {
        $user = User::find(auth()->id());

        // check current password
        if (!Hash::check($request->input('current_password'), $user->password)) {
            return redirect()->back()
                ->withErrors(['current_password' => 'The current password does not match.'])
                ->withInput()
                ->withFragment('change_password');
        }

        // validation
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'password' => 'required|confirmed|different:current_password|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->withFragment('change_password');
        }

        // update password
        $user->update([
            'password' => bcrypt($request->new_password)
        ]);

        // return back
        toast('Password updated successfully.', 'success');
        return redirect()->back()->withFragment('change_password');
    }
}
