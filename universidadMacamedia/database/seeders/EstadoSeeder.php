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
    }
}
