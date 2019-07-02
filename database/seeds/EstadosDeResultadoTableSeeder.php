<?php

use Illuminate\Database\Seeder;

class EstadosDeResultadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado_de_resultados')->insert([
            'nombre'=> 'Primer Registro',
            'fecha' => '2019-07-01',
            'cliente_id' => 1,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('estado_de_resultados')->insert([
            'nombre'=> 'Segundo Registro',
            'fecha' => '2019-07-01',
            'cliente_id' => 1,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('estado_de_resultados')->insert([
            'nombre'=> 'Primer Registro',
            'fecha' => '2019-07-01',
            'cliente_id' => 2,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('estado_de_resultados')->insert([
            'nombre'=> 'Primer Registro',
            'fecha' => '2019-07-01',
            'cliente_id' => 3,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('estado_de_resultados')->insert([
            'nombre'=> 'Primer Registro',
            'fecha' => '2019-07-01',
            'cliente_id' => 4,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
    }
}
