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
        Schema::create('autores_provienen_paises', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_autor')->nullable();
            $table->unsignedBigInteger('id_pais')->nullable();
            $table->foreign('id_autor')->references('id')->on('autores')->nullOnDelete()->nullOnUpdate();
            $table->foreign('id_pais')->references('id')->on('paises')->nullOnDelete()->nullOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autores_provienen_paises');
    }
};
