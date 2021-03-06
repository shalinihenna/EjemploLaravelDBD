<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

	$id_categorias = App\Categoria::pluck('id')->toArray();

    return [
        'nombre' => $faker->name,
        'descripcion' => $faker->text,
        'precio' => $faker->numberBetween($min=50, $max=20000),
        'estado_vitrina' => $faker->boolean,
        'peso_contenido' => $faker->numberBetween($min=10,$max=1000),
        'marca'=> $faker->word,

        'categoria_id' => $faker->randomElement($id_categorias),
    ];
});
