<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name'); // nama barang
            $table->string('description')->nullable(); // deskripsi barang
            $table->decimal('rating')->default(0.0); // rating penjualan
            $table->decimal('price')->default(0.0); // harga produk
            $table->integer('stock')->default(0.0); // stok barang
            $table->string('comments')->nullable(); // komentar produk
            $table->string('image'); // foto produk
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
