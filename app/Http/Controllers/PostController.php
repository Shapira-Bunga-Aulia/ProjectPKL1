<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    // Mendapatkan kata kunci pencarian dari input pengguna
    $search = $request->input('search');

    // Jika ada kata kunci pencarian, filter berdasarkan judul atau konten
    if ($search) {
        $posts = Post::where('nameproduct', 'like', '%' . $search . '%')
             ->orWhere('description', 'like', '%' . $search . '%')
             ->get();
    } else {
        // Jika tidak ada kata kunci, ambil semua post
        $posts = Post::all();
    }

    // Mengirim data post ke view 'home' bersama dengan kata kunci pencarian
    return view('home', compact('posts', 'search'));
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
        'detail' => 'required|string',
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
        'detail' => $request->detail,
        'price' => $request->price,
        'image' => $imagePath,
    ]);

    // Redirect ke halaman lain setelah data disimpan
    return redirect()->route('home')->with('success', 'Product created successfully!')->with('product', $post);
}

public function storeComment(Request $request, $postId)
{
    // Validasi input komentar
    $request->validate([
        'name' => 'required|string|max:255',
        'comment' => 'required|string|max:1000',
        'rating' => 'required|integer|between:1,5',
        'enterCode' => 'required|string|max:255'
    ]);

    // Menyimpan komentar
    Comment::create([
        'name' => $request->name,
        'comment' => $request->comment,
        'rating' => $request->rating,
        'enterCode' => $request->enterCode,
        'post_id' => $postId,
    ]);

    // Redirect kembali ke halaman detail post
    return redirect()->route('posts.detail', $postId)->with('success', 'Komentar berhasil disubmit!');
}

     

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Cari postingan berdasarkan ID
        $post = Post::with('comments')->findOrFail($id);
    
        // Ambil komentar terkait
        $comments = $post->comments;
    
        // Kirim data ke view
        $comments = Comment::where('post_id', $post->id)->get();
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

    public function addToCompare($id)
    {
        $post = Post::find($id);
    if (!$post) {
        return redirect()->back()->with('error', 'Produk tidak ditemukan');
    }

    $compare = session()->get('compare', []);

    // Batasi jumlah produk yang dibandingkan maksimal 4
    if (count($compare) >= 4) {
        return redirect()->back()->with('error', 'Anda hanya dapat membandingkan hingga 4 produk.');
    }

    // Cegah duplikasi produk
    if (!in_array($id, array_column($compare, 'id'))) {
        $compare[] = [
            'id' => $post->id,
            'nameproduct' => $post->nameproduct,
            'image' => $post->image,
            'price' => $post->price,
            'namebrand' => $post->namebrand,
            'availability' => $post->availability,
            'description' => $post->description,
        ];
    }

    session()->put('compare', $compare);

        return redirect()->route('home')->with('success', route('compare'));
    }

    public function compare()
    {
        // Ambil data dari sesi
        $compare = session()->get('compare', []);
    
        return view('compare', compact('compare'));
    }
    
    
    public function removeFromCompare($id)
    {
        $compare = session()->get('compare', []);

        // Filter produk yang tidak sesuai dengan ID yang dihapus
        $compare = array_filter($compare, function ($item) use ($id) {
            return $item['id'] != $id;
        });

         session()->put('compare', $compare);  
        return redirect()->route('compare')->with('success', 'Produk dihapus dari perbandingan');
    }

}
