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
        Schema::create('publish_ventures', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');          
            $table->integer('phone_number');
            $table->string('mail');
            $table->date('date_exp');
            $table->string('location');
            $table->string('description');
            $table->string('url');
           
             
            $table->unsignedBigInteger('enterprising_id')->nullable();
            

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
        Schema::dropIfExists('publish_ventures');
    }
};
