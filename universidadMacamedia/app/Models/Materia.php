<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'materias';

    protected $fillable = [
        'nombre',
        'carreraID',
        'duracion',
        'horasCursado'
    ];

    public function carrera() {
        return $this->belongsTo(Carrera::class);
    }

    public function alumnos() {
        return $this->hasMany(AlumnoMateria::class);
    }


    use HasFactory;
}
