<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personne;

class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Personne::all();
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'nom'=>'required|string',
            'prenom'=>'required|string',
            'sexe'=>'required|string',
            'date_naissance'=>'required|date',
            'telephone'=>'required|string',
        ]);
        $personne=Personne::create($data);
        return response()->json($personne,201);
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
