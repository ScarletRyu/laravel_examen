<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tienda extends Model
{
    protected $table = 'tiendas';

    public function tienda()
    {
        return $this->hasOne('App\tienda', 'id');
    }
}