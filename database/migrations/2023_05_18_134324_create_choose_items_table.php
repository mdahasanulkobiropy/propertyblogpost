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
        Schema::create('choose_items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('sub_title_part1');
            $table->longText('sub_title_part2');
            $table->string('button_text');
            $table->longText('image');
            $table->string('route');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choose_items');
    }
};
