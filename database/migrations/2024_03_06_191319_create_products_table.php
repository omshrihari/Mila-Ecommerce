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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->enum('has_variation',['1','0'])->default('0');
            $table->string('name');
            $table->string('slug');
            $table->string('image');
            $table->string('images', 1000);
            $table->decimal('mrp');
            $table->decimal('price');
            $table->text('intro');
            $table->longText('description');
            $table->integer('gst');
            $table->string('sku');
            $table->string('hsn');
            $table->enum('stock_status',['In Stock','Out of Stock'])->default('In Stock');
            $table->enum('status',['1','0'])->default('1');
            $table->integer('sort');
            $table->string('meta_title');
            $table->text('meta_key');
            $table->text('meta_des');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
