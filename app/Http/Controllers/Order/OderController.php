<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Template\UserTemplate;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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

    public function store(Request $request)
    {
        $request->validate([
            'user_template_id' => 'required|exists:user_templates,id',
            'customer_name' => 'required',
            'customer_phone' => 'required|regex:/(01)[0-9]{9}/|max_digits:11',
            'customer_address' => 'required',
            'quantity' => 'required|integer|min:1'
        ]);

        $template = UserTemplate::findOrFail($request->user_template_id);

        Order::create([
            'user_template_id' => $request->user_template_id,
            'customer_name' => $request->customer_name,
            'customer_phone' => $request->customer_phone,
            'customer_address' => $request->customer_address,
            'quantity' => $request->quantity,
            'product_name' => $template->product_name,
            'product_price' => $template->product_price,
            'total_amount' => $template->product_price * $request->quantity,
        ]);

        Alert::success("Yahoo!", "Order is submitted successfully. Our agent will contact you soon. Thank you.");
        return redirect()->back();
    }
}
