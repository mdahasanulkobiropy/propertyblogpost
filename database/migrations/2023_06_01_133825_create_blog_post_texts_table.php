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
        Schema::create('blog_post_texts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('sub_title');
            $table->string('featured');
            $table->string('search');
            $table->string('category');
            $table->string('tag');
            $table->string('subscribe_title');
            $table->longText('subscribe_sub_title');
            $table->string('subscribe_button');
            $table->string('subscribe_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_post_texts');
    }
};
