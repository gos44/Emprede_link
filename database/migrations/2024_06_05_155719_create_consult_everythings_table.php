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
        Schema::create('consult_everythings', function (Blueprint $table) {
            $table->id();
            $table->string('name_entrepreneur');
            $table->string('name_entrepreneurship');
            $table->string('entrepreneur_surname');
            $table->text('general_description');
            $table->string('name_investor');
            $table->string('surname_investor');
            $table->text('chat');
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consult_everythings');
    }
};
