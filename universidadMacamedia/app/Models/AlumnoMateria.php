<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class AlumnoMateria extends Model
{
    use HasFactory;

    protected $table = 'alumno_materias';

    protected $fillable = [
        'alumnoID',
        'materiaID',
        'fecha'
    ];

    public function materias(){
        return $this->belongsTo(Materia::class);
    }

    public function alumnos(){
        return $this->belongsTo(Alumno::class);
    }

}
