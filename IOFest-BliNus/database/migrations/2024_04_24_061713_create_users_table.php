<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name'); // nama
            $table->string('email')->unique(); // email
            $table->string('phone_number')->nullable(); // nomor hp
            $table->string('address')->nullable(); // alamat
            $table->string('role')->default('user'); // role (user, admin, seller)
            $table->timestamp('email_verified_at')->nullable(); 
            $table->string('password'); // pw
            $table->string('photo')->nullable(); // foto user
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
