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
        Schema::create('property_frontend_texts', function (Blueprint $table) {
            $table->id();
            $table->string('price');
            $table->string('bed');
            $table->string('bath');
            $table->string('type');
            $table->string('area');
            $table->string('buttontext');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_frontend_texts');
    }
};
