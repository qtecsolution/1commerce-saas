<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\User\ShopController;

class WebController extends Controller
{
    public function index()
    {
        // Validate that the domain is exists and return matched slug(subdomain).
        if (domainCheck() != false) {
            return ShopController::livePreview(domainCheck());
        }

        return view('front-end.home', [
            'packages' => Package::where('status', 1)->get()
        ]);
    }
}
