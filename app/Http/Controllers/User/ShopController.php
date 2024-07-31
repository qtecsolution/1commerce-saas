<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use App\Models\UserTheme;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShopController extends Controller
{
    public function livePreview($slug)
    {
        return 'Loading';
    }
}
