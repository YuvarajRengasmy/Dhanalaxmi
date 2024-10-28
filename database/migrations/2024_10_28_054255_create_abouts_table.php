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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title_one');
            $table->text('description_one')->nullable();
            $table->string('image_one')->nullable();
            $table->string('title_two');
            $table->text('description_two')->nullable();
            $table->string('image_two')->nullable();
            $table->string('title_three');
            $table->text('description_three')->nullable();
            $table->string('image_three')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
