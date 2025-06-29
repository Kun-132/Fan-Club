<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // In the migration file
public function up()
{
    Schema::table('carousel_slides', function (Blueprint $table) {
        $table->string('button_link')->nullable()->after('button_text');
        $table->string('link_type')->default('route')->after('button_link');
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carousel_slides', function (Blueprint $table) {
            //
        });
    }
};
