<?php

namespace App\Http\Controllers;

use App\Models\AlumnoMateria;
use Illuminate\Http\Request;

class CondicionAlumnoController extends Controller
{
    public function index(){
        $condicion = AlumnoMateria::all();

        return $condicion;
    }

    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'alumnoID' => ['required'],
            'materiaID' => ['required'],
            'estadoID' => ['required'],
            'fecha' => ['required'],
            
        ]);

        $obj = AlumnoMateria::create([
            'alumnoID' => $request->alumnoID,
            'materiaID' => $request->materiaID,
            'estadoID' => $request->estadoID,
            'fecha' => $request->fecha, 

        ]);

        return $obj;
    }

    public function show(AlumnoMateria $condicion)
    {
        return $condicion;
    }

    public function edit(AlumnoMateria $condicion, Request $request)
    {
        $validated = $request->validate([
            'alumnoID' => ['someting'],
            'materiaID' => ['someting'],
            'estadoID' => ['someting'],
            'fecha' => ['someting'],
    
        ]);

        $condicion->update($request->all());
        
        return $condicion;
    }

    public function delete(AlumnoMateria $condicion)
    {
        $condicion->delete();

        return "Alumno Eliminada Correctamente";
    }
}
