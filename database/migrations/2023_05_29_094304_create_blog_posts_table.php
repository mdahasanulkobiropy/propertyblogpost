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
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('middle_title');
            $table->longText('middle_des1');
            $table->longText('middle_des2');
            $table->longText('middle_url');
            $table->string('next_middle_title');
            $table->longText('next_middle_des1');
            $table->longText('next_middle_des2');
            $table->longText('next_middle_des3');
            $table->longText('next_middle_des4');
            $table->string('final_title');
            $table->longText('final_des');
            $table->bigInteger('blogcategory_id');
            $table->bigInteger('blogtag_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
