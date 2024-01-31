<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'materia';

    protected $fillable = [
        'nombre',
        'carreraID',
        'duracion',
        'horasCursado'
    ];

    public function carrerasMateria() {
        return $this->belongsTo(Carrera::class, 'carreraID');
    }

    public function alumnosMateria() {
        return $this->hasMany(AlumnoMateria::class);
    }


    use HasFactory;
}
