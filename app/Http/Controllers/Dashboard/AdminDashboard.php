<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    // function to show admin dashboard
    public function index()
    {
        return view('admin.dashboard');
    }
}
