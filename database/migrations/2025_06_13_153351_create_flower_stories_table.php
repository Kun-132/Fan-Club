<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
   Schema::create('flower_stories', function (Blueprint $table) {
        $table->id();
        $table->string('title_en'); // required
        $table->string('title_ja')->nullable(); // optional
        $table->string('title_mm')->nullable(); // optional
        $table->string('title_kh')->nullable(); // optional
        $table->string('slug')->unique();
        $table->string('image1'); // required
        $table->string('image2')->nullable();
        $table->string('image3')->nullable();
        $table->string('image4')->nullable();
        $table->text('paragraph_en')->nullable();
        $table->text('paragraph_ja')->nullable();
        $table->text('paragraph_mm')->nullable();
        $table->text('paragraph_kh')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flower_stories');
    }
};
