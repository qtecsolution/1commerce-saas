<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use App\Models\UserTheme;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($shop, $slug)
    {
        $shop = Shop::where('username', $shop)->first();
        $page = UserTheme::with('theme_elements')
            ->where('user_id', $shop->user_id)
            ->where('slug', $slug)->first();

        // redirect to home if shop is not found
        if (empty($shop)) {
            return redirect(env('APP_URL'));
        }

        // check the user have any page or not
        if (!empty($page)) {
            // redirect to landing page
            // if (!empty($page->theme_elements)) {
            //     return 'yahooo!';
            // } else {
            //     return 'ohhhhh!';
            // }

            return view('customer.template.templates.template-' . $page->theme_id, compact(
                'shop'
            ));
        } else {
            // redirect to home if page is not found
            return redirect(env('APP_URL'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // data validation
        $request->validate([
            'name' => 'required|unique:shops,name',
            'logo' => 'required|mimes:png,jpg,jpeg',
            'address' => 'required',
        ]);

        // create shop
        $shop = new Shop();
        $shop->user_id = auth()->id();
        $shop->name = $request->input('name');
        $shop->username = Str::slug($request->input('name'), '-');
        $shop->address = $request->input('address');

        if ($request->hasFile('logo')) {
            $request->file('logo')->store('public/shops');
            $path = 'shops/' . $request->file('logo')->hashName();

            $shop->logo = $path;
        }

        $shop->save();

        // return back
        toast('Shop created successfully', 'success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shop $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shop $shop)
    {
        // data validation
        $request->validate([
            'name' => 'required|unique:shops,name',
            'logo' => 'nullable|mimes:png,jpg,jpeg',
            'address' => 'required',
        ]);

        // create shop
        $shop->name = $request->input('name');
        $shop->username = Str::slug($request->input('name'), '-');
        $shop->address = $request->input('address');

        if ($request->hasFile('logo')) {
            $request->file('logo')->store('public/shops');
            $path = 'shops/' . $request->file('logo')->hashName();

            $shop->logo = $path;
        }

        $shop->save();

        // return back
        toast('Shop updated successfully', 'success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shop $shop)
    {
        //
    }
}
