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

        Schema::create('reviews', function (Blueprint $table)  {
            
            $table->id();
            $table->string('qualification');//calificacion
            $table->string('comment');//comentario

            $table->unsignedBigInteger('investor_id')->nullable();
            $table->unsignedBigInteger('enterprising_id')->nullable();

            $table->foreign('investor_id')
            ->references('id')
            ->on('investors')->onDelete('cascade');

            $table->foreign('enterprising_id')
            ->references('id')
            ->on('enterprisings')->onDelete('cascade');


            $table->timestamps();
            
         

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
