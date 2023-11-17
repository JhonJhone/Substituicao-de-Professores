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
        $table->unsignedBigInteger('ciclo_letivos_id');   // Foreign key reference to ciclo_letivos table
        $table->unsignedBigInteger('disciplinas_id');      // Foreign key reference to disciplinas table
        $table->unsignedBigInteger('turmas_id');           // Foreign key reference to turmas table
        $table->unsignedBigInteger('chefias_id');          // Foreign key reference to chefias table
        $table->unsignedBigInteger('coordenadores_id');    // Foreign key reference to coordenadores table
        $table->timestamps();

        $table->foreign('ciclo_letivos_id')->references('id')->on('ciclo_letivos');
        $table->foreign('disciplinas_id')->references('id')->on('disciplinas');
        $table->foreign('turmas_id')->references('id')->on('turmas');
        $table->foreign('chefias_id')->references('id')->on('chefias');
        $table->foreign('coordenadores_id')->references('id')->on('coordenadores');
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
