<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CondicionAlumno extends Model
{
    use HasFactory;

    protected $table = 'alumno_materia';

    protected $fillable = [
        'alumnoID',
        'materiaID',
        'estadoID',
        'fecha'
    ];

    public function condicionAlumno(){
        return $this->belongsTo(Alumno::class, 'alumnoID');
    }

    public function condicionMateria(){
        return $this->belongsTo(Materia::class, 'materiaID');
    }

    public function condicionEstado(){
        return $this->belongsTo(Estado::class, 'estadoID');
    }

}
