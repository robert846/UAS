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
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('from_account_id')->constrained('account');
            $table->foreignId('to_account_id')->constrained('account');
            $table->string('to_bank');
            $table->string('to_account_number');
            $table->decimal('amount', 10, 2);
            $table->timestamp('scheduled_date');
            $table->string('status');
            $table->timestamps(); // This will automatically create created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfers');
    }
};
