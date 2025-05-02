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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->decimal('cliente_lat', 10, 7);
            $table->decimal('cliente_lng', 10, 7);
            $table->string('estado')->default('pendiente');
            $table->foreignId('motorizado_id')
              ->nullable()
              ->constrained('motorizados')
              ->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
