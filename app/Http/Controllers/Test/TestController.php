<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Models\PosCart;
use App\Models\SupportTicket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    // function to test
    public function index()
    {
        return response()->json([
            'message' => 'Hello World',
        ], 500);

        $userName = Auth::user()->name;
        $explodedName = explode(' ', $userName);
        return $explodedName[count($explodedName) - 1];
    }
}
