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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('beds');
            $table->unsignedBigInteger('baths');
            $table->unsignedBigInteger('area');

            $table->tinyText('city');
            $table->tinyText('code');
            $table->tinyText('street_name');
            $table->tinyText('street_number');


            $table->unsignedInteger('price');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
