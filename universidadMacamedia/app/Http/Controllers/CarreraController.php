<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    public function index()
    {
        $carreras = Carrera::all();

        return $carreras;

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => ['string','required', 'max:20'],
            'duracion' => ['required', 'max:20']
        ]);

        $obj = Carrera::create([
            'nombre' => $request->nombre,
            'duracion' => $request->duracion,
        ]);

        return $obj;
    }

    public function show(Carrera $carrera)
    {
        return $carrera;
    }

    public function edit(Carrera $carrera, Request $request)
    {
        $validated = $request->validate([
            'nombre' => ['string','someting', 'max:20'],
            'duracion' => ['someting', 'max:20'],
            
        ]);

        $carrera->update($request->all());
        
        return $carrera;
    }

    public function delete(Carrera $carrera)
    {
        $carrera->delete();

        return "Carrera Eliminada Correctamente";
    }
}
