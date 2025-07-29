<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([Customer::all()],201);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'type'=>'required|in:physique,morale',
            'first_name'=>'nullable',
            'last_name'=>'nullable',
            'raison_sociale'=>'nullable',
            'tel'=>'required',
            'email'=>'required|email',

        ]);
        $validated['seller_id']=1;
        $customer=Customer::create($validated);
        return response()->json(['message'=>'Client enregistré avec succès','data'=>$customer],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
