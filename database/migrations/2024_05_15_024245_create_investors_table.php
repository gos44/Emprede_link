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
        Schema::create('investors', function (Blueprint $table) {

            $table->id();

            $table->string('name');
            $table->string('last_name');
            $table->date('birth_date');
            $table->integer('investor_number');
            $table->string('password');
            $table->integer('identity_document');
            $table->integer('investor_phone');
            $table->string('profile_image');
            $table->string('email');
            $table->string('location');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investors');
    }
};
