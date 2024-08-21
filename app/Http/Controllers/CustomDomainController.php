<?php

namespace App\Http\Controllers;

use App\Models\CustomDomain;
use App\Models\Template\UserTemplate;
use Illuminate\Http\Request;

class CustomDomainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $userTemplates = UserTemplate::where('user_id', auth()->user()->id)->get();
        return view('customer.domain.index', compact('userTemplates'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomDomain $customDomain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomDomain $customDomain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CustomDomain $customDomain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomDomain $customDomain)
    {
        //
    }
}
