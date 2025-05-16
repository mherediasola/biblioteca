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
        Schema::create('obras_escritas_autores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_obra')->nullable();
            $table->unsignedBigInteger('id_autor')->nullable();
            $table->foreign('id_obra')->references('id')->on('obras')->nullOnDelete()->nullOnUpdate();
            $table->foreign('id_autor')->references('id')->on('autores')->nullOnDelete()->nullOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obras_escritas_autores');
    }
};
