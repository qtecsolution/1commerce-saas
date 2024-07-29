<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OderController extends Controller
{
    public function index(Request $request)
    {
        $query = Order::where('user_id', auth()->id());
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
        $order = Order::find($id);

        if (empty($order)) {
            toast('Order details not found.', 'error');
            return back();
        } else {
            return view('customer.order.order-details', compact('order'));
        }
    }
}
