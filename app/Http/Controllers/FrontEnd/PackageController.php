<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    // function to show active packages
    public function index()
    {
        $packages = Package::where('status', 1)->get();
        return view('front-end.packages', compact('packages'));
    }

    // function to store selected package
    public function select_package($package_id)
    {
        // delete previous data
        session()->forget('selected_package');

        // store
        session(['selected_package' => $package_id]);

        // return to sign-up
        return redirect()->route('sign_up');
    }
}
