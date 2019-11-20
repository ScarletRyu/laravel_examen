<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
   protected $table = 'productos';

   public function tienda()
    {
        return $this->belongsTo('App\tienda', 'id');
    }
}