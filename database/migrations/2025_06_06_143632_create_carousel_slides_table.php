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
       Schema::create('carousel_slides', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->text('paragraph');
    $table->string('button_text')->nullable();
    $table->string('background_image'); // store image path as string
    $table->integer('position')->default(0);
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carousel_slides');
    }
};
