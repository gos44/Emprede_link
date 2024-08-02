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
            $table->unsignedBigInteger('enterprise_id')->nullable();

            $table->foreign('investor_id')
            ->references('id')
            ->on('investors')->onDelete('cascade');

            $table->foreign('enterprise_id')
            ->references('id')
            ->on('enterprises')->onDelete('cascade');
            

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
