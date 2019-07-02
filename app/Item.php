<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function relacionCategoria()
    {
        return $this->belongsTo('App\Categoria', 'categoria_id');
    }
    public function relacionEstadoDeResultados()
    {
        return $this->belongsTo('App\EstadoDeResultado', 'estado_de_resultados_id');
    }
}
