<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auditoria extends Model
{
    public function categorias(){
        return $this->belongsTo('App\Categoria', 'categoria_id', 'id');
    }
}
