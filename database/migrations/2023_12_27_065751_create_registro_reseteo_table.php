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
        Schema::create('registro_reseteo', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger ('id_reseteo')->unsigned();
            $table->bigInteger('id_tracto')->unsigned(); 
            $table->bigInteger('id_remolque')->unsigned();
            $table->dateTime('fechaDiesel');
            $table->string ('proveedor', 80); 
            $table->decimal('litros_inicial',50); 
            $table->decimal('pesos',50); 
            $table->decimal('kmInicial',50); 
            $table->decimal('kmFinal',50); 
            $table->decimal('kmRecorrido',50); 
            $table->string ('bascula', 50);
            $table->decimal('litros_viaje',50); 
            $table->decimal('carga_inicial',50); 
            $table->string ('importe', 50); 
            $table->dateTime('carga_viaje');
            $table->decimal('rendimientoInsite',50); 
            $table->decimal('ltsConsumidos',50); 
            $table->decimal('carga_diesel',20);
            $table->decimal('gastoKm',50); 
            $table->decimal('perdida',50); 
            $table->decimal('porcentaje',50); 
            $table->foreign('id_reseteo')->references('id')->on('reseteo')->onDelete('cascade');
            $table->foreign('id_tracto')->references('id')->on('tracto')->onDelete('cascade');
            $table->foreign('id_remolque')->references('id')->on('remolque')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_reseteo');
    }
};
