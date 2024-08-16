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
        Schema::create('member_sessions', function (Blueprint $table) {
            $table->id()->startingValue(6453);
            $table->foreignId('member_id')->constrained();
            $table->string('token')->unique();
            $table->string('session_key')->nullable();
            $table->timestamp('logged_in_at')->nullable();
            $table->timestamp('expired_at')->nullable();
            $table->timestamp('last_activity_at')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_sessions');
    }
};
