<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Http\Controllers\User\ShopController;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        // Validate that the domain is exists and return matched slug(subdomain).
        if (domainCheck() != false) {
            return ShopController::livePreview(domainCheck());
        }
        // return view('front-end.home');
        return redirect('HTML/index.html');
    }
}
