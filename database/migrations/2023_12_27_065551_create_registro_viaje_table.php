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
        Schema::create('registro_viaje', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger ('id_trafico')->unsigned();
            $table->bigInteger ('id_cliente')->unsigned(); 
            $table->bigInteger ('id_operador')->unsigned(); 
            $table->bigInteger ('id_tracto')->unsigned(); 
            $table->bigInteger ('id_remolque')->unsigned();
            $table->dateTime('fecha_carga'); 
            $table->dateTime('fecha_salida'); 
            $table->dateTime('fecha_llegada');
            $table->string ('estadoCarga', 100);
            $table->string ('semana'); 
            $table->string ('nombreOperador', 100); 
            $table->string ('num_tracto'); 
            $table->string ('num_remolque'); 
            $table->string ('nombreCliente', 100);
            $table->string ('estado_origen', 100);
            $table->string ('ciudad_origen', 100);
            $table->string ('estado_destino', 100); 
            $table->string ('ciudad_destino', 100);  
            $table->foreign('id_trafico')->references('id')->on('trafico')->onDelete('cascade');
            $table->foreign('id_cliente')->references('id')->on('cliente')->onDelete('cascade');
            $table->foreign('id_tracto')->references('id')->on('tracto')->onDelete('cascade');
            $table->foreign('id_remolque')->references('id')->on('remolque')->onDelete('cascade');
            $table->foreign('id_operador')->references('id')->on('operador')->onDelete('cascade');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_viaje');
    }
};
