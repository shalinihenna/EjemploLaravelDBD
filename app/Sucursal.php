<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
	// Atributos
    protected $fillable = [
        'nombre','direccion','nombre_jefe_sucursal',
    ];

    public function productos(){
    	return $this->belongsToMany('App\Product');
    }
}
