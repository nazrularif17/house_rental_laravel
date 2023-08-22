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
        Schema::create('propertys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ownerID');
            $table->string('propertyImage');
            $table->string('propertyTitle');
            $table->enum('propertyType',['bungalow','townhouse','terrace','apartment','condominium','flat']);
            $table->string('propertyPrice');
            $table->string('propertyRange');
            $table->string('propertyAddress');
            $table->enum('propertyFurnishings',['fully furnished','partially furnished','not furnished']);
            $table->string('propertyDesc');
            $table->enum('propertyStatus',['available','rented out']);
            $table->timestamps();
            $table->foreign('ownerID')->references('id')->on('owners')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propertys');
    }
};
