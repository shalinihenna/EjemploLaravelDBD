<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProductSucursal;
use Faker\Generator as Faker;

$factory->define(ProductSucursal::class, function (Faker $faker) {

	$id_sucursales = App\Sucursal::pluck('id')->toArray();
	$id_products = App\Product::pluck('id')->toArray();

    return [
        'product_id' => $faker->randomElement($id_products),
        'sucursal_id' => $faker->randomElement($id_sucursales),
        'stock' => $faker->numberBetween($min=50, $max=200),
    ];
});
