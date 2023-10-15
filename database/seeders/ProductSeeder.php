<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            array(
                'name' => 'Hamburguesa de pollo crispy',
                'cantidad' => 20,
                'precio' => 7.50,
                'imagen' => 'hambueguesa_pollo.jpg',
                'status' => 1,
                'categoria_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'name' => 'Hamburguesa de papas',
                'cantidad' => 5,
                'precio' => 5,
                'imagen' => 'hambueguesa_papas.jpg',
                'status' => 0,
                'categoria_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'name' => 'Pizza de peperoni',
                'cantidad' => 18,
                'precio' => 10,
                'imagen' => 'pizza_peperoni.jpg',
                'status' => 1,
                'categoria_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'name' => 'Pizza vegetariana',
                'cantidad' => 38,
                'precio' => 7.5,
                'imagen' => 'pizza_vegetariana.jpg',
                'status' => 1,
                'categoria_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'name' => 'Pizza jamon y maiz',
                'cantidad' => 70,
                'precio' => 7.5,
                'imagen' => 'pizza_jamon_maiz.jpg',
                'status' => 0,
                'categoria_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'name' => 'Pepito de carne',
                'cantidad' => 20,
                'precio' => 5.5,
                'imagen' => 'pepito_carne.jpg',
                'status' => 1,
                'categoria_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'name' => 'Pepito de pollo',
                'cantidad' => 12,
                'precio' => 5.5,
                'imagen' => 'pepito_pollo.jpg',
                'status' => 1,
                'categoria_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
        ];

        DB::table('productos')->insert($data);
    }
}
