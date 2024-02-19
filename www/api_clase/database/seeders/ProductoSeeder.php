<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            'nombre' => 'pantalon',
            'descripcion' => 'pantalon de cuero'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'camisa',
            'descripcion' => 'camisa de rayas'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'falda',
            'descripcion' => 'falda plisada'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'sudadera',
            'descripcion' => 'sudadera de cuero'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'buzo',
            'descripcion' => 'buzo de algodon'
        ]);
    }
}
