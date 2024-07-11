<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Models\PosCart;
use App\Models\SupportTicket;
use Illuminate\Http\Request;

class TestController extends Controller
{
    // function to test
    public function index()
    {
        return 'Something is happening.';
    }
}
