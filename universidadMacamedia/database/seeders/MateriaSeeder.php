<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('materia')->insert([
            'nombre' => 'Matematica 1',
            'carreraID' => 1,
            'duracion' => 'Anual',
            'horasCursado' => 80
        ]);
        
        DB::table('materia')->insert([
            'nombre' => 'Matematica 1',
            'carreraID' => 2,
            'duracion' => 'Anual',
            'horasCursado' => 90
        ]);

        DB::table('materia')->insert([
            'nombre' => 'Matematica 3',
            'carreraID' => 1,
            'duracion' => 'Anual',
            'horasCursado' => 120
        ]);

        DB::table('materia')->insert([
            'nombre' => 'Matematica 2',
            'carreraID' => 3,
            'duracion' => 'Anual',
            'horasCursado' => 80
        ]);

        DB::table('materia')->insert([
            'nombre' => 'Derecho 1',
            'carreraID' => 2,
            'duracion' => 'Anual',
            'horasCursado' => 80
        ]);

        DB::table('materia')->insert([
            'nombre' => 'Derecho 2',
            'carreraID' => 2,
            'duracion' => 'Anual',
            'horasCursado' => 80
        ]);

        DB::table('materia')->insert([
            'nombre' => 'Anatomia 1',
            'carreraID' => 4,
            'duracion' => 'Anual',
            'horasCursado' => 80
        ]);

        DB::table('materia')->insert([
            'nombre' => 'Pediatria',
            'carreraID' => 4,
            'duracion' => 'Cuatrimestral',
            'horasCursado' => 50
        ]);

        DB::table('materia')->insert([
            'nombre' => 'Fisica 1',
            'carreraID' => 5,
            'duracion' => 'Cuatrimestral',
            'horasCursado' => 50
        ]);

        DB::table('materia')->insert([
            'nombre' => 'Quimica 1',
            'carreraID' => 5,
            'duracion' => 'Cuatrimestral',
            'horasCursado' => 40
        ]);

        DB::table('materia')->insert([
            'nombre' => 'Matematica 1',
            'carreraID' => 6,
            'duracion' => 'Anual',
            'horasCursado' => 80
        ]);

        DB::table('materia')->insert([
            'nombre' => 'Enfermeria',
            'carreraID' => 7,
            'duracion' => 'Anual',
            'horasCursado' => 80
        ]);

        DB::table('materia')->insert([
            'nombre' => 'Comercio 1',
            'carreraID' => 8,
            'duracion' => 'Anual',
            'horasCursado' => 120
        ]);

        DB::table('materia')->insert([
            'nombre' => 'Redes Sociales',
            'carreraID' => 8,
            'duracion' => 'Cuatrimestal',
            'horasCursado' => 40
        ]);

        DB::table('materia')->insert([
            'nombre' => 'Historia 1',
            'carreraID' => 9,
            'duracion' => 'Anual',
            'horasCursado' => 120
        ]);

        DB::table('materia')->insert([
            'nombre' => 'Comunicacion Social',
            'carreraID' => 9,
            'duracion' => 'Anual',
            'horasCursado' => 140
        ]);

        DB::table('materia')->insert([
            'nombre' => 'Derecho 1',
            'carreraID' => 10,
            'duracion' => 'Anual',
            'horasCursado' => 140
        ]);

        DB::table('materia')->insert([
            'nombre' => 'Historia 1',
            'carreraID' => 10,
            'duracion' => 'Cuatrimestral',
            'horasCursado' => 40
        ]);

        DB::table('materia')->insert([
            'nombre' => 'Psicologia 1',
            'carreraID' => 11,
            'duracion' => 'Anual',
            'horasCursado' => 80
        ]);

        DB::table('materia')->insert([
            'nombre' => 'Enfermedades Mentales 1',
            'carreraID' => 11,
            'duracion' => 'Anual',
            'horasCursado' => 80
        ]);

        
    }
}
