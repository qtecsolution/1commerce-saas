<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use App\Models\Template\UlaunchTemplate;
use App\Models\Template\UserTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShopController extends Controller
{
    public function livePreview($slug)
    {
        $userTemplate = UserTemplate::with('template')->where('company_slug', $slug)->firstOrFail();
        if ($userTemplate->template_id == 1) {
            $ulaunch = UlaunchTemplate::with(['steps', 'features', 'testimonials'])
            ->where('user_id', $userTemplate->user_id)
            ->firstOrFail();

            return view('template.live.ulaunch', compact('ulaunch', 'userTemplate'));
        }

        abort(404);
    }
}
