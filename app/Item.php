<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function relacionCategoria()
    {
        return $this->belongsTo('App\Categoria', 'categoria_id', 'id');
    }
}
