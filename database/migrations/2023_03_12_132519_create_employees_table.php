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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->String('empid');
            $table->String('firstname');
            $table->String('lastname');
            $table->String('middlename');
            $table->String('address');
            $table->String('gender');
            $table->String('birthday');
            $table->String('birthplace');
            $table->String('phone');
            $table->String('civilstatus');
            $table->String('position');
            $table->String('hireddate');
            $table->String('email');
            $table->String('companyname');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
