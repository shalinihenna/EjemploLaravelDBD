<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function sucursales(){
    	return $this->belongsToMany('App\Sucursal');
    }
}
