<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

class OderController extends Controller
{
    public function index()
    {
        return view('customer.order.orders');
    }

    public function returnOrders()
    {
        return view('customer.order.return-orders');
    }

    public function orderDetails($invoice)
    {
        $order_id = substr($invoice, 3,  -3);
        $orderDetails = Order::where('user_id', auth()->id())->first();

        if (empty($orderDetails)) {
            toast('Order details not found.', 'error');
            return redirect()->back();
        } else {
            return view('customer.order.order-details', compact('order_id', 'orderDetails'));
        }
    }
}
