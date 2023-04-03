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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->String('firstname');
            $table->String('lastname');
            $table->String('middlename'); 
            $table->String('address');
            $table->String('gender');
            $table->String('dateofbirth');
            $table->String('birthplace');
            $table->String('phone');
            $table->String('civilstatus');
            $table->String('email')->unique();
            $table->String('username');
            $table->String('password');
            $table->String('image');
            $table->String('degree');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
