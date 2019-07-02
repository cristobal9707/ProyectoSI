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
            'estado_de_resultados_id' => 1,
            'concepto' => 'VENTAS Y SERVICIO',
            'sucursal' => 195,
            'total' => 4142985,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 1,
            'estado_de_resultados_id' => 1,
            'concepto' => 'VENTAS Y SERVICIO',
            'sucursal' => 193,
            'total' => 11529983,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 2,
            'estado_de_resultados_id' => 1,
            'concepto' => 'INSUMOS MATERIALES',
            'sucursal' => 100,
            'total' => -1282679,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 2,
            'estado_de_resultados_id' => 1,
            'concepto' => 'INSUMOS MATERIALES',
            'sucursal' => 193,
            'total' => -2253679,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 2,
            'estado_de_resultados_id' => 1,
            'concepto' => 'INSUMOS MATERIALES',
            'sucursal' => 195,
            'total' => -31232,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 2,
            'estado_de_resultados_id' => 1,
            'concepto' => 'INSUMOS MATERIALES',
            'sucursal' => 21,
            'total' => -661651,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 2,
            'estado_de_resultados_id' => 1,
            'concepto' => 'INSUMOS DE SEGURIDAD',
            'sucursal' => 21,
            'total' => -24690,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 2,
            'estado_de_resultados_id' => 1,
            'concepto' => 'INSUMOS DE SEGURIDAD',
            'sucursal' => 100,
            'total' => -4650,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        //CAMBIAR PARAA ADELANTE
        DB::table('items')->insert([
            'categoria_id' => 3,
            'estado_de_resultados_id' => 1,
            'concepto' => 'HONORARIOS CONTADOR',
            'sucursal' => 0,
            'total' => -83000,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 3,
            'estado_de_resultados_id' => 1,
            'concepto' => 'OXIGENO/AGAMIX',
            'sucursal' => 193,
            'total' => -411065,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 3,
            'estado_de_resultados_id' => 1,
            'concepto' => 'ARRIENDO EQUIPOS Y HERR.',
            'sucursal' => 193,
            'total' => -9033560,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 3,
            'estado_de_resultados_id' => 1,
            'concepto' => 'ARRIENDO EQUIPOS Y HERR.',
            'sucursal' => 21,
            'total' => -67982,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 3,
            'estado_de_resultados_id' => 1,
            'concepto' => 'SERVICIOS/CONTRATACIONES',
            'sucursal' => 193,
            'total' => -500000,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 3,
            'estado_de_resultados_id' => 1,
            'concepto' => 'SERVICIOS/CONTRATACIONES',
            'sucursal' => 21,
            'total' => -5854163,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('items')->insert([
            'categoria_id' => 3,
            'estado_de_resultados_id' => 1,
            'concepto' => 'GASTOS MENORES',
            'sucursal' => 21,
            'total' => -941,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
    }
}
