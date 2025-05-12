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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario')->nullable();
            $table->unsignedBigInteger('id_mesa')->nullable();
            $table->date('fecha');
            $table->time('hora_inicio');
            $table->time('hora_final');
            $table->foreign('id_usuario')->references('id')->on('users')->nullOnDelete()->nullOnUpdate();
            $table->foreign('id_mesa')->references('id')->on('mesas')->nullOnDelete()->nullOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
