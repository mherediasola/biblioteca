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
        Schema::create('obras', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->unsignedBigInteger('id_tipo')->nullable();
            $table->string('anyo_publicacion');
            $table->unsignedBigInteger('id_idioma')->nullable();
            $table->unsignedBigInteger('id_editorial')->nullable();
            $table->string('edicion');
            $table->foreign('id_tipo')->references('id')->on('tipos')->nullOnDelete()->nullOnUpdate();
            $table->foreign('id_idioma')->references('id')->on('idiomas')->nullOnDelete()->nullOnUpdate();
            $table->foreign('id_editorial')->references('id')->on('editoriales')->nullOnDelete()->nullOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obras');
    }
};
