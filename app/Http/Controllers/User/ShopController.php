<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Template\UserTemplate;
use App\Models\Template\UlaunchTemplate;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;

class ShopController extends Controller
{
    public function index($subdomain)
    {
        return $this->livePreview($subdomain);
    }

    public function livePreview($slug)
    {
        $userTemplate = UserTemplate::with('template')->where('company_slug', $slug)->firstOrFail();
        if ($userTemplate->template_id == 1) {
            $ulaunch = UlaunchTemplate::with(['steps', 'features', 'testimonials'])
                ->where('user_id', $userTemplate->user_id)
                ->firstOrFail();

            return view('template.live.ulaunch', compact('ulaunch', 'userTemplate'));
        }

        abort(404);
    }

    public function placeOrder(Request $request)
    {
        try {
            $request->validate([
                'user_template_id' => 'required|exists:user_templates,id',
                'customer_name' => 'required',
                'customer_phone' => 'required|regex:/(01)[0-9]{9}/|max:11',
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

            Alert::success("Yahoo!", "You order is submitted successfully. Our agent will contact you soon.");
            return back();
        } catch (ValidationException $e) {
            // Redirect back with the input and the fragment identifier
            return redirect()
                ->back()
                ->withErrors($e->validator)
                ->withInput()
                ->withFragment('order-form');
        }
    }
}
