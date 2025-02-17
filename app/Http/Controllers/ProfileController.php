<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index()
    {
        // Ambil data user yang sedang login
        $user = auth()->user();

        // Kembalikan view 'profile.index' dengan data user
        return view('profiles.profile', compact('user'));
    }

}
