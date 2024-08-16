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
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id')->constrained();
            $table->foreignId('bank_id')->constrained();
            $table->string('account_name');
            $table->string('account_number');
            $table->string('account_phone')->nullable();
            $table->timestamp('order_at')->nullable();
            $table->timestamp('verified_at')->nullable();
            $table->integer('status')->default(0);
            $table->integer('type')->default(0);
            $table->decimal('price')->default(0);
            $table->timestamp('paid_at')->nullable();
            $table->timestamp('expired_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_accounts');
    }
};
