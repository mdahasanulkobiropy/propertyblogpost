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
        Schema::create('single_agent_massage_from_users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('agent_id');
            $table->bigInteger('user_id');
            $table->string('email');
            $table->bigInteger('phone');
            $table->bigInteger('status_id');
            $table->enum('agentcontactwithuser',['0','1'])->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('single_agent_massage_from_users');
    }
};
