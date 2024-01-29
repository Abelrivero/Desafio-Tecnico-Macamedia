<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::all();

        return $usuarios;

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['string','required', 'max:20'],
            'email' => ['required', 'max:20'],
            'password'=> ['required', 'max:20'],
        ]);

        $obj = User::create([
            'nombre' => $request->nombre,
            'email' => $request->duracion,
            'password' => $request->password
        ]);

        return $obj;
    }

    public function show(User $usuario)
    {
        return $usuario;
    }

    public function edit(User $usuario, Request $request)
    {
        $validated = $request->validate([
            'name' => ['string','someting', 'max:20'],
            'email' => ['someting'],
            'password' => ['someting'], 
        ]);

        $usuario->update($request->all());
        
        return $usuario;
    }

    public function delete(User $usuario)
    {
        $usuario->delete();

        return "Usuario Eliminado Correctamente";
    }
}
