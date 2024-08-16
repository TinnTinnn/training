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
        Schema::create('trans', function (Blueprint $table) {
            $table->id()->startingValue(64032);
            $table->foreignId('wallet_id')->constrained('wallets');
            $table->decimal('amount');
            $table->integer('type');
            $table->integer('status');
            $table->string('create_by')->default('System Auto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trans');
    }
};
