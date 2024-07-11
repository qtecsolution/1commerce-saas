<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class CustomerDashboard extends Controller
{
    // function to show dashbhoard
    public function index()
    {
        return view('customer.dashboard');
    }
}
