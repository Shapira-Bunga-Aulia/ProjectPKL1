<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('shipping_methods', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama kurir (J&T, JNE, SiCepat, dll.)
            $table->decimal('cost', 10, 2); // Biaya pengiriman
            $table->integer('estimated_days'); // Estimasi waktu pengiriman
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('shipping_methods');
    }
};
