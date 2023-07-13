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
        Schema::create('notasbimestres', function (Blueprint $table) {
            $table->id('codigo_notabimestre');
            $table->integer('codigo_bimestre');
            $table->integer('codigo_curso');
            $table->integer('codigo_alumno');
            $table->double('nota_examenescrito');
            $table->double('nota_examenoral');
            $table->double('nota_practica');
            $table->double('nota_exposicion');
            $table->double('nota_tarea');
            $table->double('promedio_final');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notasbimestres');
    }
};
