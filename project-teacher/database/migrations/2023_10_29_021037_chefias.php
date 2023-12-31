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
        Schema::create('chefias', function (Blueprint $table) {
            $table->id();
            $table->string('inicio');
            $table->string('fim');
            $table->string('nivel');
            $table->unsignedBigInteger('docentes_id'); // Foreign key reference
            $table->foreign('docentes_id')->references('id')->on('docentes');
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
