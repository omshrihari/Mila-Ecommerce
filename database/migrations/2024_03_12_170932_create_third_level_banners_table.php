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
        Schema::create('third_level_banners', function (Blueprint $table) {
            $table->id();
            $table->string('banner1');
            $table->string('banner1_link');
            $table->string('banner2');
            $table->string('banner2_link');
            $table->string('banner3');
            $table->string('banner3_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('third_level_banners');
    }
};
