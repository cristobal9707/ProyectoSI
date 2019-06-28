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
            'nombre'=> 'Javier Nualart',
            'email' => 'javier.nualart@mail.com',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('clientes')->insert([
            'nombre'=> 'Carlo Bernucci',
            'email' => 'carlo.bernucci@mail.com',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('clientes')->insert([
            'nombre'=> 'Diego Aguero',
            'email' => 'diego.aguero@mail.com',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('clientes')->insert([
            'nombre'=> 'Cristobal Carrion',
            'email' => 'cristobal.carrion@mail.com',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
    }
}
