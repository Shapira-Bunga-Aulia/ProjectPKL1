<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $table = 'checkout_co'; // Karena default Laravel pakai "checkouts"

    protected $fillable = [
        'user_id',
        'address_id',
        'total_price',
        'shipping_method_id',
    ];

    public function shippingMethod()
    {
        return $this->belongsTo(ShippingMethod::class);
    }
}
