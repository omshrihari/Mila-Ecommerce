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
        Schema::create('second_level_banners', function (Blueprint $table) {
            $table->id();
            $table->string('main_banner');
            $table->string('main_banner_link');
            $table->string('small_banner1');
            $table->string('small_banner1_link');
            $table->string('small_banner2');
            $table->string('small_banner2_link');
            $table->string('small_banner3');
            $table->string('small_banner3_link');
            $table->string('small_banner4');
            $table->string('small_banner4_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('second_level_banners');
    }
};
