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
    Schema::create('docentes_ciclos_letivos', function (Blueprint $table) {
        $table->id();
        $table->string('nivel');
        $table->unsignedBigInteger('ciclo_letivos_id'); // Foreign key reference to ciclo_letivos table
        $table->unsignedBigInteger('disciplinas_id');    // Foreign key reference to disciplinas table
        $table->foreign('ciclo_letivos_id')->references('id')->on('ciclo_letivos');
        $table->foreign('disciplinas_id')->references('id')->on('disciplinas');
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
