<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Alumno extends Model
{
    use HasFactory;
    
    protected $table = 'alumno';

    protected $primaryKey = 'dni';

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

    public function estadoAlumno()
    {
        return $this->belongsTo(Estado::class, 'estadoID');
    }

    public function carrerasAlumno(): BelongsTo
    {
        return $this->belongsTo(Carrera::class, 'carreraID');
    }

    /* public function user(){
        return $this->belongsTo(User::class);
    } */

    public function condicionAlumno(){
        return $this->hasMany(CondicionAlumno::class);
    }

}
