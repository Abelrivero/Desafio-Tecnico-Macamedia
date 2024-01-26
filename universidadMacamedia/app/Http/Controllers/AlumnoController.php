<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::all();

        return $alumnos;

    }

    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'nombre' => ['string','required', 'max:20'],
            'apellido' => ['string','required', 'max:20'],
            'carreraID' => ['required', 'max:20'],
            'telefono' => ['string','required', 'max:10'],
            'dni' => ['required', 'max:10'],
            'numeroLegajo' => ['string','required', 'max:20'],
            'estadoID' => ['required', 'max:20'],
            'usuarioID' => ['required', 'max:20'],
        ]);

        $obj = Alumno::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'telefono' => $request->telefono,
            'dni' => $request->dni, 
            'numeroLegajo' => $request->numeroLegajo,
            'carreraID' => $request->carreraID,
            'estadoID' => $request->estadoID,
            'usuarioID' => $request->usuarioID,
        ]);

        return $obj;
    }

    public function show(Alumno $alumno)
    {
        return $alumno;
    }

    public function edit(Alumno $alumno, Request $request)
    {
        $validated = $request->validate([
            'nombre' => ['string','someting', 'max:20'],
            'apellido' => ['string','someting', 'max:20'],
            'telefono' => ['string','someting', 'max:20'],
            'dni' => ['someting', 'max:10'], 
            'numeroLegajo' => ['string','someting', 'max:20'],
            'carreraID' => ['someting', 'max:20'],
            'estadoID' => ['someting', 'max:20'],
            'usuarioID' => ['someting', 'max:20']
        ]);

        $alumno->update($request->all());
        
        return $alumno;
    }

    public function delete(Alumno $alumno)
    {
        $alumno->delete();

        return "Alumno Eliminada Correctamente";
    }
}
