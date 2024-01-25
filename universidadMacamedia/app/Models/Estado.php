<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $table = 'estados';

    protected $fillable = [
        'descripcion',
        'codigo'
    ];

    public function alumnoE(){
        return $this->hasMany(Alumno::class);
    }
}
