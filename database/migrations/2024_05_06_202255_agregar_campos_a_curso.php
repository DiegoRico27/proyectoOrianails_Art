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
        Schema::table('cursos', function (Blueprint $table) {
            $table->string('duracion', 20);
            $table->string('estado', 20);
        }); // Aquí agregué el paréntesis que faltaba
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('curso', function (Blueprint $table) {
            $table->dropColumn(['duracion', 'estado']);
        });
    }
};
