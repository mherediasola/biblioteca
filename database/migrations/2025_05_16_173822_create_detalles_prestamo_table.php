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
        Schema::create('detalles_prestamo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_prestamo')->nullable();
            $table->unsignedBigInteger('id_ejemplar')->nullable();
            $table->unique(['id_prestamo', 'id_ejemplar']);
            $table->timestamps();
            $table->foreign('id_prestamo')->references('id')->on('prestamos')->nullOnDelete()->nullOnUpdate();
            $table->foreign('id_ejemplar')->references('id')->on('ejemplares')->nullOnDelete()->nullOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles_prestamo');
    }
};
