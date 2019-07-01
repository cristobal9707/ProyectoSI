<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadosderesultadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_de_resultados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->date('fecha');
            $table->bigInteger('margen_de_explotacion');
            $table->bigInteger('resultado_operacional');
            $table->bigInteger('resultado_no_operacional');
            $table->bigInteger('resultado_antes_de_impuesto_a_la_renta');
            $table->bigInteger('utilidad_liquida');
            $table->bigInteger('utilidad_del_ejercicio');
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estado_de_resultados');
    }
}
