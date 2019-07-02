<?php

namespace App\Exports;

use App\EstadoDeResultado;
use Maatwebsite\Excel\Concerns\FromCollection;

class EstadoDeResultadoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return EstadoDeResultado::all();
    }

    
}
