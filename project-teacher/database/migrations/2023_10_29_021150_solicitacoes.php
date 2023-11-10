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
        Schema::create('solicitacoes', function (Blueprint $table) {
            $table->id();
            $table->string('data');
            $table->string('hora');
            $table->string('justificativa');
            $table->string('anexo');
            $table->string('tipo');
            $table->string('ciencia_substituto');
            $table->string('data_devolucao');
            $table->string('hora_devolucao');
            $table->string('autorizacao_chefia');
            $table->string('ciencia_chefia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
