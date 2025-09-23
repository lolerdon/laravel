<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offertes = [
            'of12872' => [
                'offertenummer' => 'of12872',
                'klant' => 'Van Meer Solutions',
                'bedrag' => 1500.50
            ],
            'of10632' => [
                'offertenummer' => 'of10632',
                'klant' => 'Groene vingers',
                'bedrag' => 1200.00
            ],
            'of28003' => [
                'offertenummer' => 'of28003',
                'klant' => 'Marios pizza',
                'bedrag' => 2500.75
            ],
            'of10891' => [
                'offertenummer' => 'of10891',
                'klant' => 'Blauwwater Consulting',
                'bedrag' => 1750.00
            ]
        ];

        return view('home', compact('offertes'));
    }


    public function order()
    {
        return view('order');
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
    public function show(string $id)
    {
        $offertes = [
            'of12872' => [
                'offertenummer' => 'of12872',
                'klant' => 'Van Meer Solutions',
                'bedrag' => 1500.50
            ],
            'of10632' => [
                'offertenummer' => 'of10632',
                'klant' => 'Groene vingers',
                'bedrag' => 1200.00
            ],
            'of28003' => [
                'offertenummer' => 'of28003',
                'klant' => 'Marios pizza',
                'bedrag' => 2500.75
            ],
            'of10891' => [
                'offertenummer' => 'of10891',
                'klant' => 'Blauwwater Consulting',
                'bedrag' => 1750.00
            ]
        ];

        // Check if the order exists
        if (!array_key_exists($id, $offertes)) {
            abort(404, 'Order not found');
        }

        return view('order', [
            'order' => $offertes[$id]
        ]);
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
