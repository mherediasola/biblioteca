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
        Schema::create('copias_fisicas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ejemplar')->nullable();
            $table->foreign('id_ejemplar')->references('id')->on('ejemplares')->nullOnDelete()->nullOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copias_fisicas');
    }
};
