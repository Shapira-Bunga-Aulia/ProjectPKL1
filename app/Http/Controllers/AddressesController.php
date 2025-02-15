<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Addresses;
use App\Models\Address;
use Illuminate\Support\Facades\Auth;

class AddressesController extends Controller
{
    // Menampilkan halaman checkout dengan daftar alamat pengguna
    // public function index()
    // {
    //     $addresses = Address::all();
    
    //     return view('checkout', compact('addresses'));
    // }
    
    public function index()
    {
        $userId = Auth::id(); // Ambil ID user yang login
        $addresses = Address::where('user_id', $userId)->get(); // Ambil hanya alamat milik user tersebut

        return view('checkout', compact('addresses'));
    }

    

    // Form tambah alamat baru
    public function create()
    {
        return view('checkout'); // Pastikan file Blade ini ada
    }

    // Menyimpan alamat baru
    public function store(Request $request)
{
    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'Anda harus login untuk menambahkan alamat.');
    }

    $request->validate([
        'recipient_name' => 'required|string|max:30',
        'phone_number' => 'required|string|max:12',
        'postcode' => 'required|digits:5', // Pastikan selalu 5 digit       
        'address1' => 'required|string|max:255', // Tambahkan validasi
        'address2' => 'nullable|string|max:255', // Bisa kosong
        'province' => 'required|json|max:100',
        'regency' => 'required|json|max:100',
        'subdistrict' => 'required|json|max:100',
        'village' => 'required|json|max:100',
    ]);

    $userId = Auth::id();
    $lastNumber = Address::where('user_id', $userId);
    // $newNumber = $lastNumber ? $lastNumber + 1 : 1;

    Address::create([
        'user_id' => $userId,
        // 'number' => $newNumber,
        'recipient_name' => $request->recipient_name,
        'phone_number' => $request->phone_number,
        'postcode' => $request->postcode,
        'address1' => $request->address1, // Simpan Address 1
        'address2' => $request->address2, // Simpan Address 2 (boleh kosong)
        'province' => $request->province,
        'regency' => $request->regency,
        'subdistrict' => $request->subdistrict,
        'village' => $request->village,
    ]);

    return redirect()->route('address.name')->with('success', 'Alamat berhasil ditambahkan');
}
 

    // Menampilkan detail alamat tertentu
    public function show($id)
    {
        // $address = Address::where('user_id', Auth::id())->findOrFail($id);
        // return view('acheckout', compact('address')); // Pastikan file Blade ini ada
        $userId = Auth::id(); // Ambil ID user yang sedang login
        $addresses = Address::where('user_id', $userId)->get(); // Hanya ambil alamat user ini
        return view('checkout', compact('addresses'));
    }

    // Form edit alamat
    public function edit($id)
    {
        $address = Address::where('user_id', Auth::id())->findOrFail($id);
        return view('addresses.edit', compact('address')); // Pastikan file Blade ini ada
    }

    // Mengupdate alamat
    public function update(Request $request, $id)
    {
        $request->validate([
            // 'number' => 'nullable|integer',
            'postcode' => 'required|string|max:10',
            'province' => 'required|json|max:100',
            'regency' => 'required|json|max:100',
            'subdistrict' => 'required|json|max:100',
            'village' => 'required|json|max:100',
        ]);

        $address = Address::where('user_id', Auth::id())->findOrFail($id);
        $address->update($request->all());

        return redirect()->route('addresses.index')->with('success', 'Alamat berhasil diperbarui');
    }

    // Menghapus alamat
    public function destroy($id)
    {
        $address = Address::where('user_id', Auth::id())->findOrFail($id);
        $address->delete();

        return redirect()->route('addresses.index')->with('success', 'Alamat berhasil dihapus');
    }
}
