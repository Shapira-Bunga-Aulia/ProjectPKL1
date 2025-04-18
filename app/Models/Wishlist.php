<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = ['post_id'];

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
