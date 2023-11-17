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
    Schema::create('turmas', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->unsignedBigInteger('cursos_id'); // Foreign key reference to cursos table
        $table->foreign('cursos_id')->references('id')->on('cursos');
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
