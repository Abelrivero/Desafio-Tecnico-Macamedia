<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function index()
    {
        $estados = Estado::all();

        return $estados;

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'descripcion' => ['string','required', 'max:20'],
            'codigo' => ['string','required', 'max:20']
        ]);

        $obj = Estado::create([
            'descripcion' => $request->descripcion,
            'codigo' => $request->codigo,
        ]);

        return $obj;
    }

    public function show(Estado $estado)
    {
        return $estado;
    }

    public function edit(Estado $estado, Request $request)
    {
        $validated = $request->validate([
            'descripcion' => ['string','someting', 'max:20'],
            'codigo' => ['string','someting', 'max:20'],
            
        ]);

        $estado->update($request->all());
        
        return $estado;
    }

    public function delete(Estado $estado)
    {
        $estado->delete();

        return "Estado Eliminada Correctamente";
    }
}
