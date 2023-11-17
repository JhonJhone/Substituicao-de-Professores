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
    Schema::create('ofertas', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('docentes_id');        // Foreign key reference to docentes table
        $table->unsignedBigInteger('turmas_id');          // Foreign key reference to turmas table
        $table->unsignedBigInteger('ciclo_letivos_id');   // Foreign key reference to ciclo_letivos table
        $table->unsignedBigInteger('disciplinas_id');      // Foreign key reference to disciplinas table
        $table->timestamps();

        $table->foreign('docentes_id')->references('id')->on('docentes');
        $table->foreign('turmas_id')->references('id')->on('turmas');
        $table->foreign('ciclo_letivos_id')->references('id')->on('ciclo_letivos');
        $table->foreign('disciplinas_id')->references('id')->on('disciplinas');
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
