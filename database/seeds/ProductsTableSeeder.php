<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // model factories: generación de datos de pruebas
    	//factory(Product::class)->make();  // crea objetos

    	factory(Product::class, 100)->create();//crea objetos y los guarda en bbdd
    }
}
