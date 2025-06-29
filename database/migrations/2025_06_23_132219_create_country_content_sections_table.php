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
       Schema::create('country_content_sections', function (Blueprint $table) {
    $table->id();
    $table->foreignId('country_id')->constrained('countries')->onDelete('cascade');
    $table->string('title');                 // Used for both section title and side nav
    $table->text('paragraph');
    $table->string('image')->nullable();
    $table->string('video_src')->nullable();
    $table->enum('status', ['show', 'hide'])->default('show');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('country_content_sections');
    }
};
