<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leveranciers_info;
use Illuminate\Support\Facades\DB;

class Vendor extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leveranciers = Leveranciers_info::all();
        return view('index', ['leveranciers' => $leveranciers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//    dd($request->all());
        $validatedData = $request->validate([
            'bedrijfsnaam' => 'required',
            'contactpersoon' => 'required',
            'email' => 'required',
            'telefoonnummer' => 'required',
            'adres' => 'required',
            'postcode' => 'required',
            'plaats' => 'required',
            'land' => 'required',
            'kvk_nummer' => 'required',
            'bankrekening' => 'required',
        ]);

        DB::table('leveranciers_info')->insert($validatedData);
        return redirect('/')->with('success', 'Leverancier toegevoegd');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
