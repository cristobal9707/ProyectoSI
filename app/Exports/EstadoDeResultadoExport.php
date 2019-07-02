<?php

namespace App\Exports;

use App\EstadoDeResultado;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class EstadoDeResultadoExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    use Exportable;

    protected $registro;

    public function __construct($registro = null)
    {
        $this->registro = $registro;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $this->registro ?: EstadoDeResultado::all();
    }

    public function headings(): array
    {
        return [
        'ID', 'Descripcion', 'Sucursal','Valor','Categoria'
        ];
    }

    
}
