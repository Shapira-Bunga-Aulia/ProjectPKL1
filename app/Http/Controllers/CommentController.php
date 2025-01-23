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
            'user_id' => 'required|string',
            'name' => 'required|string',
            'rating' => 'required',
            'enterCode' => 'required',
        ]);

        $post = Post::findOrFail($postId);

        // Simpan komentar ke database
        $post->comments()->create([
            'comment' => $request->comment,
            'post_id' => $postId,
            'user_id' => $request->user_id,
            'name' => $request->name,
            'rating' => $request->rating,
            'enterCode' => $request->enterCode,
        ]);

        // Redirect kembali ke halaman detail post
        return redirect()->route('posts.detail', $postId)->with('success', 'Review berhasil dipost');
    }
}