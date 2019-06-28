<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoDeResultado extends Model
{
    public function relacionCategoria()
    {
        return $this->belongsToMany(Categoria::class, 'categoria_estadoderesultados', 'estadosderesultados_id', 'categoria_id');
    }

    public function RelacionCliente()
    {
        return $this->belongsTo('App\Cliente', 'cliente_id', 'id');
    }
}
