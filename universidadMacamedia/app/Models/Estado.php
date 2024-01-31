<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $table = 'estado';

    protected $fillable = [
        'descripcion',
        'codigo'
    ];

    public function alumnoEstado(){
        return $this->hasMany(Alumno::class);
    }

    public function alumnosMaterias(){
        return $this->hasMany(AlumnoMateria::class);
    }
}
