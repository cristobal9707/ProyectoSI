<?php

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'categoria_id' => 1,
            'concepto' => 'VENTAS Y SERVICIO',
            'centro_resultado' => 195,
            'acumulado' => 4142985,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 1,
            'concepto' => 'VENTAS Y SERVICIO',
            'centro_resultado' => 193,
            'acumulado' => 11529983,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 2,
            'concepto' => 'INSUMOS MATERIALES',
            'centro_resultado' => 100,
            'acumulado' => -1282679,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 2,
            'concepto' => 'INSUMOS MATERIALES',
            'centro_resultado' => 193,
            'acumulado' => -2253679,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 2,
            'concepto' => 'INSUMOS MATERIALES',
            'centro_resultado' => 195,
            'acumulado' => -31232,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 2,
            'concepto' => 'INSUMOS MATERIALES',
            'centro_resultado' => 21,
            'acumulado' => -661651,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 2,
            'concepto' => 'INSUMOS DE SEGURIDAD',
            'centro_resultado' => 21,
            'acumulado' => -24690,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 2,
            'concepto' => 'INSUMOS DE SEGURIDAD',
            'centro_resultado' => 100,
            'acumulado' => -4650,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        //CAMBIAR PARAA ADELANTE
        DB::table('items')->insert([
            'categoria_id' => 3,
            'concepto' => 'HONORARIOS CONTADOR',
            'centro_resultado' => 0,
            'acumulado' => -83000,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 3,
            'concepto' => 'OXIGENO/AGAMIX',
            'centro_resultado' => 193,
            'acumulado' => -411065,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 3,
            'concepto' => 'ARRIENDO EQUIPOS Y HERR.',
            'centro_resultado' => 193,
            'acumulado' => -9033560,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 3,
            'concepto' => 'ARRIENDO EQUIPOS Y HERR.',
            'centro_resultado' => 21,
            'acumulado' => -67982,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 3,
            'concepto' => 'SERVICIOS/CONTRATACIONES',
            'centro_resultado' => 193,
            'acumulado' => -500000,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 3,
            'concepto' => 'SERVICIOS/CONTRATACIONES',
            'centro_resultado' => 21,
            'acumulado' => -5854163,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 3,
            'concepto' => 'GASTOS MENORES',
            'centro_resultado' => 21,
            'acumulado' => -941,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
    }
}
