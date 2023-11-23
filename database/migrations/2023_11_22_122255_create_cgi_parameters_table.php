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
        Schema::create('cgi_parameters', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('acuerdo')->nullable();
            $table->longText('instrucciones')->nullable();
            $table->string('navegacion_tipo_id')->nullable();
            $table->string('finalizar_al_error')->nullable();
            $table->string('finalizar_al_intento')->nullable();
            $table->string('sp')->nullable();
            $table->string('periodo')->nullable();
            $table->longText('results')->nullable();
            $table->longText('dishonesty_results')->nullable();
            $table->longText('accesibility')->nullable();
            $table->string('tolerancia_login')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cgi_parameters');
    }
};
