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
            'nombre' => 'Ingreso de Explotacion',
            'simbolo' => '+',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);

        DB::table('categorias')->insert([
            'nombre'=> 'Costo de Explotacion',
            'simbolo' => '-',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);

        DB::table('categorias')->insert([
            'nombre'=> 'Gastos de Administracion y Ventas',
            'simbolo' => '-',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);

        DB::table('categorias')->insert([
            'nombre'=> 'Ingresos Financieros',
            'simbolo' => '+',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);

        DB::table('categorias')->insert([
            'nombre'=> 'Utilidad Inversion Empresa Relacionadas',
            'simbolo' => '+',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);

        DB::table('categorias')->insert([
            'nombre'=> 'Otros ingresos Fuera de Explotacion',
            'simbolo' => '+',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        
        DB::table('categorias')->insert([
            'nombre'=> 'Perdida Inversion Empresas Relacionadas',
            'simbolo' => '-',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        
        DB::table('categorias')->insert([
            'nombre'=> 'Amortizacion Menor Valor de Inversiones',
            'simbolo' => '-',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        
        DB::table('categorias')->insert([
            'nombre'=> 'Gastos Financieros',
            'simbolo' => '-',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        
        DB::table('categorias')->insert([
            'nombre'=> 'Otros Egresos Fuera de Explotacion',
            'simbolo' => '-',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        
        DB::table('categorias')->insert([
            'nombre'=> 'Correccion Monetaria',
            'simbolo' => '-',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        
        DB::table('categorias')->insert([
            'nombre'=> 'Impuesto a la Renta',
            'simbolo' => '-',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        
        DB::table('categorias')->insert([
            'nombre'=> 'Utilidad (Perdida) Consolidada',
            'simbolo' => '-',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        
        DB::table('categorias')->insert([
            'nombre'=> 'Interes Minoritario',
            'simbolo' => '-',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        
        DB::table('categorias')->insert([
            'nombre'=> 'Amortizacion Mayor Valor de Inversiones',
            'simbolo' => '+',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);

    }
}
