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
        Schema::create('produk_perhiasans', function (Blueprint $table) {
            $table->id('id_produk');
            $table->string('nama_produk');
            $table->string('jenis_produk')->nullable();
            $table->decimal('berat', 10, 2)->nullable();
            $table->string('material')->nullable();
            $table->decimal('harga', 15, 2);
            $table->integer('stok')->default(0);
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk_perhiasans');
    }
};

