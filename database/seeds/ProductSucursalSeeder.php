<?php

use Illuminate\Database\Seeder;

class ProductSucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ProductSucursal::class, 10)->create();
    }
}
