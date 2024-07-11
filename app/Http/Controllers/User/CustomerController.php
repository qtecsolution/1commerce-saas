<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::where('user_id', auth()->id())->get();
        return view('customer.contact.customers', compact('customers'));
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
            'phone' => 'required|regex:/(01)[0-9]{9}/|unique:customers,phone',
        ]);

        // create customers
       $customer = new Customer();
       $customer->user_id = auth()->id();
       $customer->name = $request->input('name');
       $customer->phone = $request->input('phone');
       $customer->email = $request->input('email');
       $customer->address = $request->input('address');
       $customer->save();

       // Alert
       toast('Customer created successfully.', 'success');

       // return to customers
       return redirect()->route('customers.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
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
            'phone' => 'required|regex:/(01)[0-9]{9}/|unique:customers,phone,' . $id,
        ]);

        // update customer
        $updateCustomer = Customer::find($id);
        $updateCustomer->name = $request->input('name');
        $updateCustomer->phone = $request->input('phone');
        $updateCustomer->email = $request->input('email');
        $updateCustomer->address = $request->input('address');
        $updateCustomer->save();

        // return to customers
        toast('The customer is updated successfully.', 'success');
        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // delete customer
        $deleteCustomer = Customer::find($id);
        $deleteCustomer->delete();

        // return back
        toast('The customer is deleted successfully.', 'success');
        return redirect()->back();
}
}
