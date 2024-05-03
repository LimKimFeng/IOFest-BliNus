<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function(Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('phone_number');
            $table->string('address');
            $table->float('total_payment')->default(0.0);
            $table->enum('order_status', ['new_order', 'processed', 'sending', 'done']);
            $table->timestamps();
        });

        Schema::create('order_items', function(Blueprint $table){
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->string('product_name');
            $table->decimal('price', 10, 2);
            $table->integer('quantity');
            $table->string('note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
        Schema::dropIfExists('order_items');
    }
};
