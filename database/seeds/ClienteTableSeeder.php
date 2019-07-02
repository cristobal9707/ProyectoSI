<?php

use Illuminate\Database\Seeder;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'nombre'=> 'Ferreteria ABC',
            'email' => 'ferreteria.abc@mail.com',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('clientes')->insert([
            'nombre'=> 'Clinica Dental DTT',
            'email' => 'clinica.dtt@mail.com',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('clientes')->insert([
            'nombre'=> 'Abogado Juan',
            'email' => 'juan.abogado@mail.com',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('clientes')->insert([
            'nombre'=> 'Edificio ETC',
            'email' => 'edificio.etc@mail.com',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
    }
}
