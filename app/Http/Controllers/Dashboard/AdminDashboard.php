<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Models\SupportTicket;
use App\Models\Template\Template;
use App\Http\Controllers\Controller;
use App\Models\Template\UserTemplate;

class AdminDashboard extends Controller
{
    // function to show admin dashboard
    public function index()
    {
        return view('admin.dashboard', [
            'customers' => User::where('is_admin', 0)->count(),
            'active_templates' => Template::count(),
            'subscriptions' => Subscription::where('status', 1)->count(),
            'active_tickets' => SupportTicket::where('status', 1)->count(),
            'userTemplates' => UserTemplate::with(['orders'])->limit(5)->latest()->get(),
            'tickets' => SupportTicket::with(['support'])->limit(5)->where('status', 1)->latest()->get(),
        ]);
    }
}
