<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Models\Template\UserTemplate;

class CustomerDashboard extends Controller
{
    // function to show dashboard
    public function index()
    {
        $userTemplates = UserTemplate::with(['orders'])
            ->where('user_id', auth()->user()->id)
            ->get();
        $orders = Order::whereIn('user_template_id', $userTemplates->pluck('id'))
            ->latest()
            ->limit(5)
            ->get();
        return view('customer.dashboard', compact('userTemplates', 'orders'));
    }
}
