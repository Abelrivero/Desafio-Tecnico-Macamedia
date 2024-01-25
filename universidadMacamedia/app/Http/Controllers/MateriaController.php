<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index()
    {
        $materias = Materia::all();

        return $materias;

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => ['string','required', 'max:20'],
            'carreraID' => ['required', 'max:20'],
            'duracion' => ['string','required', 'max:20'],
            'horasCursado' => ['required', 'max:20'],
            
        ]);

        $obj = Materia::create([
            'nombre' => $request->nombre,
            'carreraID' => $request->carreraID,
            'duracion' => $request->duracion,
            'horasCursado' => $request->horasCursado,
        ]);

        return $obj;
    }

    public function show(Materia $materia)
    {
        return $materia;
    }

    public function edit(Materia $materia, Request $request)
    {
        $validated = $request->validate([
            'nombre' => ['string','someting', 'max:20'],
            'carreraID' => ['someting', 'max:20'],
            'duracion' => ['someting', 'max:20'],
            'horasCursado' => ['someting', 'max:20'],
            
        ]);

        $materia->update($request->all());
        
        return $materia;
    }

    public function delete(Materia $materia)
    {
        $materia->delete();

        return "Materia Eliminada Correctamente";
    }
}
