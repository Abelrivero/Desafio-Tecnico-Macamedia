<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'carreras';

    protected $fillable = [
        'nombre',
        'duracion'
    ];

    public function materia(){
        return $this->hasMany(Materia::class);
    }

    public function alumnoC(){
        return $this->hasMany(Alumno::class);
    }

    use HasFactory;
}
