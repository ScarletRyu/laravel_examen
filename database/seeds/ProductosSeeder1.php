<?php

use Illuminate\Database\Seeder;

class ProductosSeeder1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
public function run()
{
    productos::insert([
        'id' => 1,
        'name' => 'manzana',
        'description' => 'roja',
        'stock' => 10,
        'price' => 66
        
    ]);

    productos::insert([
        'id' => 2,
        'name' => 'pan',
        'description' => 'seco',
        'stock' => 5,
        'price' => 12
        
    ]);

    productos::insert([
        'id' => 3,
        'name' => 'carne',
        'description' => 'vaca',
        'stock' => 20,
        'price' => 35
        
    ]);

    productos::insert([
        'id' => 4,
        'name' => 'naranja',
        'description' => 'fresca',
        'stock' => 3,
        'price' => 22
        
    ]);

    productos::insert([
        'id' => 5,
        'name' => 'pc',
        'description' => 'gaming',
        'stock' => 10,
        'price' => 300
        
    ]);

    productos::insert([
        'id' => 6,
        'name' => 'pantalla',
        'description' => 'lcd',
        'stock' => 2,
        'price' => 120
        
    ]);

    productos::insert([
        'id' => 7,
        'name' => 'tuberia',
        'description' => 'acero',
        'stock' => 1,
        'price' => 45
        
    ]);

    productos::insert([
        'id' => 8,
        'name' => 'martillo',
        'description' => 'hierro',
        'stock' => 3,
        'price' => 82
        
    ]);

    productos::insert([
        'id' => 9,
        'name' => 'cemento',
        'description' => 'es cemento',
        'stock' => 4,
        'price' => 1
        
    ]);

    productos::insert([
        'id' => 10,
        'name' => 'tarta',
        'description' => 'fresa',
        'stock' => 4,
        'price' => 55
        
    ]);
}
}
