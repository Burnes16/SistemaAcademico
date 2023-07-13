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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id("codigo_alumno");
            $table->string("nombre1_alumno");
            $table->string("nombre2_alumno");
            $table->string("apellido1_alumno");
            $table->string("apellido2_alumno");
            $table->integer("codigo_matricula");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
