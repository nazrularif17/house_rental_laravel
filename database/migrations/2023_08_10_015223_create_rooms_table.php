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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('roomImage');
            $table->string('roomTitle');
            $table->enum('roomType',['single','sharing']);
            $table->string('roomPrice');
            $table->string('roomRange');
            $table->string('roomAddress');
            $table->enum('roomFurnishings',['fully furnished','partially furnished','not furnished']);
            $table->string('roomDesc');
            $table->enum('roomStatus',['available','rented out']);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
