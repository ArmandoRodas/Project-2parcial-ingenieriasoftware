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
            $table->foreignId('comunidad_id')
              ->after('id')
              ->constrained('comunidades');
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
                $table->dropConstrainedForeignId('comunidad_id');
            });
        });
    }
};
