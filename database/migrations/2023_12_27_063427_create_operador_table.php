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
        Schema::create('operador', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger ('id_trafico')->unsigned();
            $table->string ('nombreOperador', 100);
            $table->binary ('foto');
            $table->string ('matricula', 80);
            $table->string ('rfc', 80);
            $table->foreign('id_trafico')->references('id')->on('trafico')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operador');
    }
};
