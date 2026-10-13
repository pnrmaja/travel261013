<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->unsignedBigInteger('airline_id');
            $table->integer('limit');
            $table->timestamps();

            $table->foreign('airline_id')->references('id')->on('airlines');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
