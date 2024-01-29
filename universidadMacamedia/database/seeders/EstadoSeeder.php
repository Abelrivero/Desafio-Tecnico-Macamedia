<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estado')->insert([
            'descripcion' => 'Activo',
            'codigo' => 'act',
        ]);

        DB::table('estado')->insert([
            'descripcion' => 'Inactivo',
            'codigo' => 'ina',
        ]);

        DB::table('estado')->insert([
            'descripcion' => 'Aprobado',
            'codigo' => 'apr',
        ]);

        DB::table('estado')->insert([
            'descripcion' => 'Desaprobado',
            'codigo' => 'des',
        ]);

        DB::table('estado')->insert([
            'descripcion' => 'Regular',
            'codigo' => 'reg',
        ]);

        DB::table('estado')->insert([
            'descripcion' => 'Libre',
            'codigo' => 'lib',
        ]);
    }
}
