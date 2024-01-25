<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';

    protected $fillable = [
        'nombre',
        'apellido',
        'dni',
        'carreraID',
        'telefono',
        'numeroLegajo',
        'estadoID',
        'usuarioID'
    ];

    public function estado(){
        return $this->belongsTo(Estado::class);
    }

    public function carrera(){
        return $this->belongsTo(Carrera::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function materias(){
        return $this->hasMany(AlumnoMateria::class);
    }

    use HasFactory;
}
