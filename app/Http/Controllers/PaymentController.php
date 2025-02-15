<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('checkout');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('checkout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'nomor' => 'nullable',
            'bukti' => 'required|string',
        ]);

        Payment::create([
            'name' => $request->name,
            'nomor' =>$request->nomor,
            'bukti' => $request->bukti,
        ]);

        return redirect()->route('payment.store')->with('success', 'Payment berhasil');
    }

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
