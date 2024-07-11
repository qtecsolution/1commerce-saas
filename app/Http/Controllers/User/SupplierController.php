<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::where('user_id', auth()->id())->get();

        if (isset($_GET['is_from']) && $_GET['is_from'] == 'vue') {
            // return response
            return response()->json([
                'suppliers' => $suppliers
            ]);
        } else {
            // return to suppliers
            return view('customer.contact.suppliers', compact('suppliers'));
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
            'name' => 'required',
            'phone' => 'required|regex:/(01)[0-9]{9}/|unique:suppliers,phone',
            'company' => 'required',
        ]);

        // create supplier
        $user = new Supplier();
        $user->user_id = auth()->id();
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->company = $request->input('company');
        $user->address = $request->input('address');
        $user->save();

        if (isset($request->is_from) && $request->is_from == 'vue') {
            $suppliers = Supplier::where('user_id', auth()->id())->get();

            // return response
            return response()->json([
                'suppliers' => $suppliers
            ]);
        } else {
            // return back
            toast('Supplier created successfully', 'success');
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // data validation
        $request->validate([
            'name' => 'required',
            'phone' => 'required|regex:/(01)[0-9]{9}/|unique:suppliers,phone,' . $id,
            'company' => 'required',
        ]);

        // update supplier
        $user = Supplier::find($id);
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->company = $request->input('company');
        $user->address = $request->input('address');
        $user->save();

        if (isset($request->is_from) && $request->is_from == 'vue') {
            $suppliers = Supplier::where('user_id', auth()->id())->get();

            // return response
            return response()->json([
                'suppliers' => $suppliers
            ]);
        } else {
            // return back
            toast('Supplier updated successfully', 'success');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        //
    }

    // function to status active & block
    public function status($id, $status)
    {
        $supplier = Supplier::find($id);
        $supplier->status = $status;
        $supplier->save();
        return back();
    }
}
