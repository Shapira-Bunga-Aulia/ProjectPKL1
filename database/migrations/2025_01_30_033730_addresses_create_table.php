<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id'); // Relasi dengan tabel users
            // $table->integer('number'); // Nomor rumah atau unit
            $table->string('recipient_name'); // Nama penerima
            $table->string('phone_number'); // Nomor telepon
            $table->string('address1'); // Alamat pertama
            $table->string('address2')->nullable(); // Alamat kedua (opsional)
            $table->string('postcode');
            $table->json('province'); // Nama provinsi
            $table->json('regency'); // Nama kabupaten/kota
            $table->json('subdistrict'); // Nama kecamatan
            $table->json('village'); // Nama desa/kelurahan
            $table->timestamps();

            // Relasi dengan tabel users
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('addresses', function (Blueprint $table) {
        //     $table->dropForeign(['user_id']); // Menghapus relasi dengan tabel users
        // });

        Schema::dropIfExists('addresses');
    }
};
