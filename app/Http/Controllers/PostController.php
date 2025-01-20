<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::all();  // Mengambil semua produk dari database
        return view('home', compact('posts')); // Mengirim data produk ke view home
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
{
    // Validasi input form
    $request->validate([
        'nameproduct' => 'required|string|max:255',
        'namebrand' => 'required|string|max:255',
        'code' => 'required|string|max:255',
        'availability' => 'required|integer',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048', // Validasi gambar
    ]);

    // Menyimpan gambar
    $imagePath = null;

    if ($request->hasFile('image')) {
        // Menyimpan gambar di storage tanpa 'public' disk
        $imagePath = $request->file('image')->store('images', 'public');
    }

    // Mendapatkan URL gambar
    $imageUrl = Storage::url($imagePath);  // Menggunakan Storage untuk mendapatkan URL gambar


    // Menyimpan data ke dalam database
    $post = Post::create([
        'nameproduct' => $request->nameproduct,
        'namebrand' => $request->namebrand,
        'code' => $request->code,
        'availability' => $request->availability,
        'description' => $request->description,
        'price' => $request->price,
        'image' => $imagePath,
    ]);

    // Redirect ke halaman lain setelah data disimpan
    return redirect()->route('posts.create')->with('success', 'Product created successfully!')->with('product', $post);
}

     

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Cari postingan berdasarkan ID
        $post = Post::findOrFail($id);
    
        // Ambil komentar terkait
        $comments = $post->comments; // Ini akan mengambil semua komentar terkait dengan post
    
        // Kirim data ke view
        return view('posts.detail', compact('post', 'comments'));
    }    

    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    // Method untuk menghapus post
    public function destroy($id)
    {
        // Cari post berdasarkan ID
        $post = Post::findOrFail($id);

        // Hapus gambar dari storage jika ada
        if ($post->image) {
            Storage::delete($post->image);
        }

        // Hapus data post dari database
        $post->delete();

        // Redirect ke halaman utama dengan pesan sukses
        return redirect()->route('home')->with('success', 'Product deleted successfully!');
    }


    public function home()
    {
        // Ambil semua produk dari database
        $posts = Post::all();

        return view('home', compact('posts'));
    }

}
