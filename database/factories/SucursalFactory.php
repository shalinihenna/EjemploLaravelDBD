<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sucursal;
use Faker\Generator as Faker;

$factory->define(Sucursal::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'direccion' => $faker->address,
        'nombre_jefe_sucursal' => $faker->name,
    ];
});
