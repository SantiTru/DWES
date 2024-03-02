<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TareasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('tareas')->insert([
                'titulo' => 'Menu',
                'descripcion' => 'Menu semanal Sofia'
            ]);
            DB::table('tareas')->insert([
                'titulo' => 'Mueble',
                'descripcion' => 'Montar armario cuarto Sofia'
            ]);
            DB::table('tareas')->insert([
                'titulo' => 'Ingles',
                'descripcion' => 'Hacer prueba nivel Ingles'
            ]);
            DB::table('tareas')->insert([
                'titulo' => 'Reunion',
                'descripcion' => 'Preparar informe Peru'
            ]);    
    }
}
