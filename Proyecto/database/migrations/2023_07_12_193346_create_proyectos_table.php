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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('nombreproyecto');
            $table->string('nombrecliente');
            $table->text('descripcionproyecto');
            $table->text('fechaempezado');
            $table->string('fechaterminado');
            $table->string('presupuesto');
            $table->string('prioridad');
            $table->string('liderproyecto');
            $table->string('nombreteam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};