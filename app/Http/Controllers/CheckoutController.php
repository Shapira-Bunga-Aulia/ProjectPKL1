<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\ShippingMethod;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    // Menampilkan daftar checkout
    public function index()
    {
        // Mengambil semua data checkout beserta relasi dengan shippingMethod dan address
        $checkouts = Checkout::with('shippingMethod', 'address')->get();
        return view('checkout', compact('checkouts'));
    }

    // Menampilkan form tambah checkout
    public function create()
    {
        // Mengambil semua shipping methods
        $shippingMethods = ShippingMethod::all();
        return view('checkout', compact('shippingMethods'));
    }

    

    // Menyimpan checkout baru
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'recipient_name' => 'required|string',
            'phone_number' => 'required|string',
            'address_id' => 'required|exists:addresses,id',  // Menggunakan address_id
            'total_price' => 'required|numeric',
            'shipping_method_id' => 'nullable|exists:shipping_methods,id',
        ]);

        // Membuat checkout baru
        Checkout::create($request->all());

        // Redirect ke halaman daftar checkout
        return redirect()->route('checkout')->with('success', 'Checkout berhasil dibuat!');
    }

    // Menampilkan detail checkout
    public function show($id)
    {
        // Mengambil data checkout berdasarkan ID, beserta relasi shippingMethod dan address
        $checkout = Checkout::with('shippingMethod', 'address')->findOrFail($id);
        return view('checkouts.show', compact('checkout'));
    }

    // Menampilkan form edit checkout
    public function edit($id)
    {
        // Mengambil data checkout berdasarkan ID dan semua shipping methods
        $checkout = Checkout::findOrFail($id);
        $shippingMethods = ShippingMethod::all();
        return view('checkout',- compact('checkout', 'shippingMethods'));
    }

    // Mengupdate checkout
    public function update(Request $request, $id)
    {
        // Validasi input untuk update
        $request->validate([
            'shipping_method_id' => 'nullable|exists:shipping_methods,id',
        ]);

        // Mengambil data checkout berdasarkan ID
        $checkout = Checkout::findOrFail($id);
        $checkout->update($request->all());

        // Redirect ke halaman daftar checkout
        return redirect()->route('checkouts.index')->with('success', 'Checkout berhasil diperbarui!');
    }

    // Menghapus checkout
    public function destroy($id)
    {
        // Mengambil data checkout berdasarkan ID dan menghapusnya
        $checkout = Checkout::findOrFail($id);
        $checkout->delete();

        // Redirect ke halaman daftar checkout
        return redirect()->route('checkouts.index')->with('success', 'Checkout berhasil dihapus!');
    }
}
