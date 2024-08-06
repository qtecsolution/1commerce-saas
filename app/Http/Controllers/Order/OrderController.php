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
        $template = UserTemplate::where('user_id', auth()->id())->first();
        if ($template) {
            $query = Order::where('user_template_id', $template->id);
            if ($request->status) {
                $query->where('status', $request->status);
            }
            $orders = $query->latest()->paginate(10);

            return view('customer.order.orders', compact('orders'));
        }

        Alert::error('Oops!', 'Template Not Setup yet.');
        return to_route('templates.index');
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
