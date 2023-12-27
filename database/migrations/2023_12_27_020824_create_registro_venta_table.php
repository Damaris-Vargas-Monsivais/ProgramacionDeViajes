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
        Schema::create('registro_venta', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string ('numInstruccion', 100);
            $table->string ('factura', 80); 
            $table->dateTime('fecha_factura');
            $table->decimal('venta', 10);
            $table->decimal('pago_operador', 10); 
            $table->string ('moneda', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_venta');
    }
};
