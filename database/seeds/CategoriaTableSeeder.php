<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre'=> 'Ingreso de Explotacion',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);

        DB::table('categorias')->insert([
            'nombre'=> 'Costo de Explotacion',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);

        DB::table('categorias')->insert([
            'nombre'=> 'Gastos de Administracion y Ventas',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);

        DB::table('categorias')->insert([
            'nombre'=> 'Ingresos Financieros',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);

        DB::table('categorias')->insert([
            'nombre'=> 'Utilidad Inversion Empresa Relacionadas',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);

        DB::table('categorias')->insert([
            'nombre'=> 'Otros ingresos Fuera de Explotacion',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        
        DB::table('categorias')->insert([
            'nombre'=> 'Perdida Inversion Empresas Relacionadas',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        
        DB::table('categorias')->insert([
            'nombre'=> 'Amortizacion Menor Valor de Inversiones',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        
        DB::table('categorias')->insert([
            'nombre'=> 'Gastos Financieros',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        
        DB::table('categorias')->insert([
            'nombre'=> 'Otros Egresos Fuera de Explotacion',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        
        DB::table('categorias')->insert([
            'nombre'=> 'Correccion Monetaria',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        
        DB::table('categorias')->insert([
            'nombre'=> 'Impuesto a la Renta',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        
        DB::table('categorias')->insert([
            'nombre'=> 'Utilidad (Perdida) Consolidada',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        
        DB::table('categorias')->insert([
            'nombre'=> 'Interes Minoritario',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        
        DB::table('categorias')->insert([
            'nombre'=> 'Amortizacion Mayor Valor de Inversiones',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);

    }
}
