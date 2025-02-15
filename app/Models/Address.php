<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'addresses'; // Nama tabel

    protected $fillable = [
        // 'number',
        'user_id',
        'recipient_name',
        'phone_number',
        'postcode',
        'address1', // Tambah ini
        'address2', // Tambah ini
        'province',
        'regency',
        'subdistrict',
        'village',
    ];
    

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
