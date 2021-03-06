<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function relacionEstadoDeResultado()
    {
        return $this->belongsToMany(Estadoderesultado::class, 'categoria_estadoderesultados', 'categoria_id', 'estado_de_resultados_id');
    }
    public function relacionItem()
    {
        return $this->hasMany('App\Item', 'categoria_id', 'id');
    }
    
}
