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
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->foreignId('account_id')->constrained('account');
            $table->string('transaction_type');
            $table->decimal('amount', 10, 2);
            $table->string('description')->nullable();
            $table->timestamp('transaction_date');
            $table->timestamps(); // This will automatically create created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction');
    }
};
