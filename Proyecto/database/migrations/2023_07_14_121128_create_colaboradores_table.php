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
        Schema::create('colaboradores', function (Blueprint $table) {
            $table->id();
            $table->string('nombrecolaborador');
            $table->string('apellidocolaborador');
            $table->string('usernamecolaborador');
            $table->string('passwordcolaborador');
            $table->string('joindatecolaborador');
            $table->string('telefonocolaborador');
            $table->string('companiacolaborador');
            $table->string('departamentocolaborador');
            $table->string('designacioncolaborador');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colaboradores');
    }
};
