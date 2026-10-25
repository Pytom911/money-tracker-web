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
        Schema::create('forex_trades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('pair'); // EURUSD, GBPUSD, etc.
            $table->enum('direction', ['buy', 'sell']);
            $table->decimal('lot_size', 10, 2);
            $table->decimal('entry_price', 10, 5);
            $table->decimal('exit_price', 10, 5)->nullable();
            $table->decimal('profit_loss', 15, 2)->nullable();
            $table->decimal('pip_value', 15, 2)->nullable();
            $table->date('entry_date');
            $table->date('exit_date')->nullable();
            $table->enum('status', ['open', 'closed', 'cancelled'])->default('open');
            $table->text('notes')->nullable();
            $table->string('broker')->nullable();
            $table->string('account_id')->nullable();
            $table->timestamps();

            $table->index(['user_id', 'pair']);
            $table->index(['status', 'entry_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forex_trades');
    }
};