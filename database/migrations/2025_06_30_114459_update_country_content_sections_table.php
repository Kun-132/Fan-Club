<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('country_content_sections', function (Blueprint $table) {
            $table->text('paragraph')->nullable()->change(); // Make paragraph nullable
            $table->string('image_2')->nullable();            // Add image_2
            $table->string('image_3')->nullable();            // Add image_3
        });
    }

    public function down(): void
    {
        Schema::table('country_content_sections', function (Blueprint $table) {
            $table->text('paragraph')->nullable(false)->change(); // Revert paragraph to not nullable
            $table->dropColumn(['image_2', 'image_3']);           // Remove added images
        });
    }
};

