<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    public function productos(){
    	return $this->belongsToMany('App\Product');
    }
}
