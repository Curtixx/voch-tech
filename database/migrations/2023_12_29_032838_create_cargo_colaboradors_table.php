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
        Schema::create('cargo_colaboradors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cargo_id');
            $table->unsignedBigInteger('colaborador_id');
            $table->integer('nota_desempenho')->nullable();
            $table->timestamps();

            $table->foreign('cargo_id')->references('id')->on('cargos')->onDelete('cascade');
            $table->foreign('colaborador_id')->references('id')->on('colaboradors')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cargo_colaboradors');
    }
};
