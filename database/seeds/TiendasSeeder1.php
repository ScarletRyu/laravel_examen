<?php

use Illuminate\Database\Seeder;

class TiendasSeeder1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tiendas::insert([
        	'name' => 'Informatica'
        ]);

        tiendas::insert([
        	'name' => 'Comida'
        ]);

        tiendas::insert([
        	'name' => 'Cacharros'
        ]);
    }
}
