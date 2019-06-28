<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asesoria extends Model
{
    public function categorias(){
        return $this->belongsTo('App\Categoria', 'categoria_id', 'id');
    }
}
