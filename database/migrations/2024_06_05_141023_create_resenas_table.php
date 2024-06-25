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
<<<<<<<< HEAD:database/migrations/2024_06_05_141023_create_resenas_table.php
        Schema::create('resenas', function (Blueprint $table) {
========
        Schema::create('consult_lists', function (Blueprint $table) {
>>>>>>>> 8be227cb3748a3cf0b1d1dea73ae03a7190366a8:database/migrations/2024_06_05_155758_create_consult_lists_table.php
            $table->id();
            $table->string('qualification');//calificacion
            $table->string('comment');//comentario
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<<< HEAD:database/migrations/2024_06_05_141023_create_resenas_table.php
        Schema::dropIfExists('resenas');
========
        Schema::dropIfExists('consult_lists');
>>>>>>>> 8be227cb3748a3cf0b1d1dea73ae03a7190366a8:database/migrations/2024_06_05_155758_create_consult_lists_table.php
    }
};
