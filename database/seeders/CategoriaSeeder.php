<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            'name' => 'Hamburguesas',
            'icon' => 'burguer-icon',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now() 
        ]);

        DB::table('categorias')->insert([
            'name' => 'Pizzas',
            'icon' => 'pizza-icon',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now() 
        ]);

        DB::table('categorias')->insert([
            'name' => 'Pepitos',
            'icon' => 'pepito-icon',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now() 
        ]);
    }
}
