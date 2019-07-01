<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaEstadoderesultadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_estadoderesultados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('margen_de_explotacion');
            $table->bigInteger('resultado_operacional');
            $table->bigInteger('resultado_no_operacional');
            $table->bigInteger('resultado_antes_de_impuesto_a_la_renta');
            $table->bigInteger('utilidad_liquida');
            $table->bigInteger('utilidad_del_ejercicio');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade'); 
            $table->unsignedBigInteger('estado_de_resultados_id');
            $table->foreign('estado_de_resultados_id')->references('id')->on('estado_de_resultados')->onDelete('cascade')->onUpdate('cascade'); 
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
        Schema::dropIfExists('categoria_estadoderesultados');
    }
}
