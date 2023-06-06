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
        Schema::create('index_all_texts', function (Blueprint $table) {
            $table->id();
            $table->string('property_title');
            $table->string('property_sub_title');
            $table->string('property_button_text');
            $table->string('agent_title');
            $table->string('agent_sub_title');
            $table->string('agent_button_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('index_all_texts');
    }
};
