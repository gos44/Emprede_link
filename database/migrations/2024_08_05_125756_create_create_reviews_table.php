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
        Schema::create('create_reviews', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('investor_id')->nullable();
            $table->unsignedBigInteger('enterprice_id')->nullable();

            $table->foreign('investor_id')
            ->references('id')
            ->on('investors')->onDelete('cascade');

            $table->foreign('enterprice_id')
            ->references('id')
            ->on('enterprices')->onDelete('cascade');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('create_reviews');
    }
};
