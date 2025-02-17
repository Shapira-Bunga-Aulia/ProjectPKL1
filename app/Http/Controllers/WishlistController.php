<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Pastikan hanya pengguna yang login bisa mengakses
    }

    // Menampilkan daftar produk di wishlist
    public function index()
    {
        $wishlists = Wishlist::with('post')
            ->where('user_id', auth()->id())
            ->get();

        return view('wishlist', compact('wishlists'));
    }

    // Menyimpan produk ke wishlist
    public function store($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return redirect()->back()->with('error', 'Produk tidak ditemukan.');
        }

        // Cek apakah produk sudah ada di wishlist pengguna
        $existingWishlist = Wishlist::where('user_id', auth()->id())
            ->where('post_id', $post->id)
            ->first();

        if ($existingWishlist) {
            return redirect()->back()->with('error', 'Produk sudah ada di wishlist.');
        }

        Wishlist::create([
            'user_id' => auth()->id(),
            'post_id' => $post->id
        ]);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke wishlist.');
    }
}
