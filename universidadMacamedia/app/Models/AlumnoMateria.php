<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class AlumnoMateria extends Model
{
    use HasFactory;

    protected $table = 'alumno_materia';

    protected $fillable = [
        'alumnoID',
        'materiaID',
        'estadoID',
        'fecha'
    ];

    public function materias(){
        return $this->belongsTo(Materia::class, 'materiaID');
    }

    public function alumnos(){
        return $this->belongsTo(Alumno::class, 'alumnoID');
    }

    public function estadoMateria(){
        return $this->belongsTo(Estado::class, 'estadoID');
    }

}
