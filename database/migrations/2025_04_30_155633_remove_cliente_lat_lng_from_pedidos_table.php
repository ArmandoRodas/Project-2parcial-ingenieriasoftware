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
        Schema::table('pedidos', function (Blueprint $table) {
            //
            Schema::table('pedidos', function (Blueprint $table) {
                $table->dropColumn(['cliente_lat','cliente_lng']);
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pedidos', function (Blueprint $table) {
            //

            Schema::table('pedidos', function (Blueprint $table) {
                $table->decimal('cliente_lat',10,7);
                $table->decimal('cliente_lng',10,7);
            });
        });
    }
};
