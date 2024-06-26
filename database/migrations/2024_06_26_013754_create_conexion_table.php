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
        Schema::create('conexion', function (Blueprint $table) {
                $table->id('id_conexion');
                $table->foreignId('id_emprendedor')->constrained('emprendedores', 'id_emprendedor');
                $table->foreignId('id_inversionista')->constrained('inversionistas', 'id_inversionista');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_conexion');
    }
};
