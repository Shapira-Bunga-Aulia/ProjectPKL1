<?php

namespace App\Http\Controllers;

use App\Models\cr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function loginAuth(Request $request)
     {
         $request->validate([
             'email' => 'required|email',
             'password' => 'required'
         ]);
     
         $credentials = $request->only(['email', 'password']);
     
         if (Auth::attempt($credentials)) {
             return redirect()->route('home');
         } else {
             return redirect()->back()->with('failed', 'Email atau password salah, silakan coba lagi.');
         }
     }
     
    public function index()
    {
        return view('login');
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
