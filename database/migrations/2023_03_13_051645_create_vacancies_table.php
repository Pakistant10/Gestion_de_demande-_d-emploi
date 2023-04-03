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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->String('companyname');
            $table->String('category');
            $table->String('address');
            $table->String('occuptitle');
            $table->String('salary');
            $table->String('numofemp');
            $table->String('duration');
            $table->String('experience');
            $table->String('description');
            $table->String('prefsex');
            $table->String('sector');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
