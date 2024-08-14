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
        Schema::create('enterprices', function (Blueprint $table) {
            $table->id();
            $table->string('enterprise_name');          
            $table->string('description');
            $table->string('specification');
            $table->string('categorie');
          
            $table->unsignedBigInteger('enterprising_id')->nullable();
            $table->unsignedBigInteger('publish_venture_id')->nullable();
            $table->unsignedBigInteger('investor_id')->nullable();

            $table->foreign('enterprising_id')
            ->references('id')
            ->on('enterprisings')->onDelete('cascade');

            $table->foreign('publish_venture_id')
            ->references('id')
            ->on('publish_ventures')->onDelete('cascade');

            $table->foreign('investor_id')
            ->references('id')
            ->on('investors')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enterprices');
    }
};
