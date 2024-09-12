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
        Schema::create('web_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('footer_logo');
            $table->string('app_name');
            $table->string('mobile1');
            $table->string('mobile2');
            $table->string('email1');
            $table->string('email2');
            $table->string('address1',500);
            $table->string('address2',500);
            $table->string('fb');
            $table->string('insta');
            $table->string('yt');
            $table->string('x');
            $table->string('meta_title',500);
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
        Schema::dropIfExists('web_profiles');
    }
};
