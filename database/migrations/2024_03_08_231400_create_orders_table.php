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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->string('invoice_no');
            $table->string('user_ip')->nullable();
            $table->string('session_id')->nullable();
            $table->string('merchant_user_id');
            $table->string('name');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('pincode');
            $table->string('street');
            $table->string('mobile');
            $table->string('email');
            $table->string('order_notes')->nullable();
            $table->decimal('amount');
            $table->enum('order_status',['processing','complete','cancelled'])->default('processing');
            $table->enum('payment_method',['Online','COD'])->default('Online');
            $table->string('transaction_id');
            $table->string('payment_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
