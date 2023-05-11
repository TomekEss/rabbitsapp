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
        Schema::create('cageRabbit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rabbit_id');
            $table->foreign('rabbit_id')->references('id')->on('rabbits');
            $table->unsignedBigInteger('cage_id');
            $table->foreign('cage_id')->references('id')->on('cages');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cageRabbit');
    }
};
