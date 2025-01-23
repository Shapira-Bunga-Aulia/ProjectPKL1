<?php

namespace App\Http\Controllers;

use App\Models\cr;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validasi input pengguna
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'telephone' => 'required|numeric',
            'fax' => 'nullable|numeric',
            'address1' => 'required|string|max:255',
            'address2' => 'nullable|string|max:255',
            'city' => 'required|string|max:255',
            'postcode' => 'nullable|string|max:20',
            'country' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Jika validasi gagal, kirimkan pesan error kembali ke form
        if ($validator->fails()) {
            return redirect()->route('register')->withErrors($validator)->withInput();
        }

        // Menyimpan data pengguna ke dalam database
        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->telephone = $request->telephone;
        $user->fax = $request->fax;
        $user->address1 = $request->address1;
        $user->address2 = $request->address2;
        $user->city = $request->city;
        $user->postcode = $request->postcode;
        $user->country = $request->country;
        $user->province = $request->province;
        $user->password = Hash::make($request->password);
        $user->save();

        // Redirect ke halaman login atau halaman lainnya setelah berhasil registrasi
        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
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
