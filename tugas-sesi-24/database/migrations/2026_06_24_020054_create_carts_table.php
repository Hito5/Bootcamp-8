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
    Schema::create('carts', function (Blueprint $table) {
        $table->id();
        // Keranjang ini milik user siapa?
        $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        // Barang apa yang dimasukin?
        $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
        // Jumlah barangnya berapa?
        $table->integer('quantity')->default(1);
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
