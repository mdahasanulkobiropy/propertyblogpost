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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('agent_id');
            $table->string('license');
            $table->string('email_icon')->default('fa fa-envelope-o');
            $table->string('phone_icon')->default('fa fa-phone');
            $table->string('phone');
            $table->longText('about');
            $table->string('image');
            $table->string('part1');
            $table->string('part2');
            $table->string('part3');
            $table->string('facebook_icon')->default('fa fa-facebook');
            $table->longText('facebook')->nullable();
            $table->string('twitter_icon')->default('fa fa-twitter');
            $table->longText('twitter')->nullable();
            $table->string('pinterest_icon')->default('fa fa-pinterest');
            $table->longText('pinterest')->nullable();
            $table->string('instagram_icon')->default('fa fa-linkedin');
            $table->longText('instagram')->nullable();
            $table->bigInteger('creator_id')->nullable();
            $table->enum('status',['0','1'])->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
