<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicChatTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users');
            $table->timestamps();
        }); 

        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('room_id');
            $table->text('content');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('room_id')->references('id')->on('rooms');
        });

        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('room_id');
            $table->timestamp('joined_at')->useCurrent();
            $table->timestamp('left_at')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('room_id')->references('id')->on('rooms');
        });

        Schema::create('moderation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('moderator_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('room_id');
            $table->text('reason');
            $table->timestamp('banned_at')->useCurrent();
            $table->timestamp('unbanned_at')->nullable();

            $table->foreign('moderator_id')->references('id')->on('users');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('room_id')->references('id')->on('rooms');
        });

        Schema::create('notification', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->text('message');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
        Schema::dropIfExists('messages');
        Schema::dropIfExists('memberships');
        Schema::dropIfExists('moderation');
        Schema::dropIfExists('notification');
    }
};
