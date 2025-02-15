<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingMethod extends Model
{
    use HasFactory;
    protected $table = 'shipping_methods';
    protected $fillable = ['name', 'cost', 'estimated_days'];

    public function checkouts()
    {
        return $this->hasMany(Checkout::class);
    }
}
