<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function relacionEstadoDeResultado()
    {
        return $this->hasMany('App\EstadoDeResultado', 'cliente_id', 'id');
    }
}
