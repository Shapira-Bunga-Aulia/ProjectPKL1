<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        // Validasi input
        $request->validate([
            'comment' => 'required|max:500',
        ]);

        // Temukan post yang bersangkutan
        $post = Post::findOrFail($postId);

        // Simpan komentar ke database
        $post->comments()->create([
            'comment' => $request->comment,
        ]);

        // Redirect kembali ke halaman detail post
        return redirect()->route('posts.detail', $postId)->with('success', 'Komentar berhasil dikirim');
    }
}