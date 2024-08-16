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
        Schema::create('members', function (Blueprint $table) {
            $table->id()->startingValue(5446);
            $table->string('name');
            $table->string('username', 10)->unique();
            $table->string('password', 60);
            $table->string('code')->unique();
            $table->foreignId('role_id')->constrained();
            $table->foreignId('wallet_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
