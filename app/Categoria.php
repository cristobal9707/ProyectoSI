<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function asesorias(){
        return $this->hasMany('App\Asesoria', 'categoria_id', 'id');
    }
}
