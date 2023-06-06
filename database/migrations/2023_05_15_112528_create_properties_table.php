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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('location');
            $table->longText('description');
            $table->string('image');
            $table->bigInteger('price');
            $table->longText('year_built');
            $table->integer('bedroom_id');
            $table->integer('bathroom_id');
            $table->string('parkingspace_id');
            $table->integer('area');
            $table->string('stories');
            $table->string('button_text')->default('view details');
            $table->string('countroom_id');
            $table->bigInteger('featured_id');
            $table->bigInteger('status_id');
            $table->bigInteger('agent_id');
            $table->string('color');
            $table->enum('post_status', ['0', '1'])->default('0');
            $table->bigInteger('creator_id');
            $table->bigInteger('approver_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
