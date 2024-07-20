<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function alta(Request $request)
    {

        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->telefono = $request->telefono;
        $persona->save();
        return response()->setStatusCode(201);
    }
    
    public function baja(Request $request)
    {
        $persona = Persona::find($request->id);
        $persona->delete();
        return response()->setStatusCode(204);
    }
 
    public function modificacion(Request $request)
    {
        $persona = Persona::find($request->id);
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->telefono = $request->telefono;
        $persona->save();
        return response()->setStatusCode(200);
    }
}

