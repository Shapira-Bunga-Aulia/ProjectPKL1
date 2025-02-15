<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\ShippingMethod;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
        
    // }

    public function index()
    {
        $shippingMethods = ShippingMethod::all();
        return view('checkout', compact('shippingMethods'));
    }
    
    // Menyimpan metode pengiriman yang dipilih
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'cost' => 'nullable',
            'estimated_days' => 'nullable',
        ]);

        ShippingMethod::create([
            'name' => $request->name,
            'cost' => $request->cost,
            'estimated_days' => $request->estimated_days,
        ]);

        // // Simpan data ke sesi atau database (sesuai kebutuhan)
        // session(['selected_shipping' => $request->shipping_method]);

        return redirect()->route('shipping.index')->with('success', 'Metode pengiriman telah dipilih.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $shippingMethods = ShippingMethod::all();
        return view('checkout', compact('shippingMethods'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, )
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
