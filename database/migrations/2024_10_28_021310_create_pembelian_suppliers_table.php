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
        Schema::create('pembelian_suppliers', function (Blueprint $table) {
            $table->id('id_pembelian');
            $table->foreignId('id_supplier')->constrained('supplier');
            $table->date('tanggal_pembelian');
            $table->decimal('total_biaya', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian_suppliers');
    }
};
