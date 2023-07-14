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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombreC');
            $table->string('apellidoC');
            $table->string('username')->unique();
            $table->string('emailC')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('passwordC');
            $table->string('repasswordC');
            $table->string('telefonoC');
            $table->string('compNombreC');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
