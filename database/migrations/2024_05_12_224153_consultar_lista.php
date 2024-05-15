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
        //
        Schema::create("consultar_listas", function (Blueprint $table) {
            $table->id();
            $table->string('name_entrepreneur');
            $table->string('entrepreneur_surname');
            $table->string('name_entrepreneurship');
            $table->string('surname_investor');
            $table->text('general_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
            Schema::dropIfExists('consultar_lista');
    }
};
