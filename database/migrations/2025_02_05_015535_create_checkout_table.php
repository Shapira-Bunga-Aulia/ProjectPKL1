<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutTable extends Migration
{
    public function up()
    {
        Schema::create('checkout_co', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->bigInteger('user_id');
            $table->bigInteger('address_id'); // Tambahkan relasi ke tabel addresses
            $table->decimal('total_price', 10, 2);
            $table->bigInteger('shipping_method_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('checkout');
    }
}
