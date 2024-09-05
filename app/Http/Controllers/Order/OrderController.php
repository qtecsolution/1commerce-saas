<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Template\UserTemplate;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $templateIds = UserTemplate::where('user_id', auth()->id())->pluck('id');
        $query = Order::with(['userTemplate'])->whereIn('user_template_id', $templateIds);
        if ($request->status) {
            $query->where('status', $request->status);
        }
        $orders = $query->latest()->paginate(10);

        return view('customer.order.orders', compact('orders'));
    }

    public function updateStatus($id, $status)
    {
        $order = Order::find($id);
        $order->update([
            'status' => $status
        ]);

        toast('Order status updated successfully.', 'success');
        return back();
    }

    public function show($id)
    {
        $order = Order::with(['userTemplate', 'dynamicFields', 'payments'])->find($id);

        if (empty($order)) {
            toast('Order details not found.', 'error');
            return back();
        } else {
            return view('customer.order.order-details', compact('order'));
        }
    }
}
