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
        Schema::disableForeignKeyConstraints();
        Schema::create('estado_de_resultados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->date('fecha');
            $table->bigInteger('margen_de_explotacion')->nullable($value = true);
            $table->bigInteger('resultado_operacional')->nullable($value = true);
            $table->bigInteger('resultado_no_operacional')->nullable($value = true);
            $table->bigInteger('resultado_antes_de_impuesto_a_la_renta')->nullable($value = true);
            $table->bigInteger('utilidad_liquida')->nullable($value = true);
            $table->bigInteger('utilidad_del_ejercicio')->nullable($value = true);
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade'); 
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('estado_de_resultados');
        Schema::enableForeignKeyConstraints();
    }
}
