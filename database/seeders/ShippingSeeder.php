<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ShippingMethod;

class ShippingSeeder extends Seeder
{
    public function run(): void
    {
        ShippingMethod::create([
            'name' => 'J&T Express',
            'cost' => 7000,
            'estimated_days' => 2,
        ]);

        ShippingMethod::create([
            'name' => 'JNE Reguler',
            'cost' => 6000,
            'estimated_days' => 3,
        ]);
    }
}

