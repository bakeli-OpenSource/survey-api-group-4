<?php

namespace App\Http\Controllers;

use App\Models\sondage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SondageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $sondage = sondage::create([
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'email' => $request->email,
            'tel' => $request->tel,
            'choix' => $request->choix,
            'pourquoi' => $request->pourquoi,
        ]);

        return response()->json($sondage);

        // Validation des données
        $validator = Validator::make($request->all(), [
            'prenom' => 'required|string|email',
            'nom' => 'required|string',
            'email' => 'required|string|email',
            'tel' => 'required|string',
            'choix' => 'required|string',
            'pourquoi' => 'required|string',
        ]);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(sondage $sondage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sondage $sondage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sondage $sondage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sondage $sondage)
    {
        //
    }
}
