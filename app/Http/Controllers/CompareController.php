<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompareController extends Controller
{
    //
    public function index()
    {
        // Kirimkan data produk untuk dibandingkan (jika ada)
        return view('compare');
    }   
}
