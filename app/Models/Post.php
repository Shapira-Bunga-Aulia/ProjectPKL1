<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameproduct', 
        'namebrand', 
        'code', 
        'availability', 
        'description', 
        'price', 
        'image',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class); // Asumsi model Comment ada di folder app/Models
    }
}

