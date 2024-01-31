<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('carrera')->insert([
            'nombre' => 'Adm. de Empresas',
            'duracion' => 5,
        ]);

        DB::table('carrera')->insert([
            'nombre' => 'Contador Publico',
            'duracion' => 5,
        ]);

        DB::table('carrera')->insert([
            'nombre' => 'Economia',
            'duracion' => 5,
        ]);

        DB::table('carrera')->insert([
            'nombre' => 'Medicina',
            'duracion' => 7,
        ]);
        
        DB::table('carrera')->insert([
            'nombre' => 'Ingenieria',
            'duracion' => 5,
        ]);

        DB::table('carrera')->insert([
            'nombre' => 'Prof. de Matematicas',
            'duracion' => 4,
        ]);

        DB::table('carrera')->insert([
            'nombre' => 'Obstetricia',
            'duracion' => 3,
        ]);

        DB::table('carrera')->insert([
            'nombre' => 'Marketing',
            'duracion' => 3,
        ]);

        DB::table('carrera')->insert([
            'nombre' => 'Periodismo',
            'duracion' => 4,
        ]);

        DB::table('carrera')->insert([
            'nombre' => 'Abogacia',
            'duracion' => 5,
        ]);

        DB::table('carrera')->insert([
            'nombre' => 'Lic en Psicologia',
            'duracion' => 5,
        ]);
    }
}
