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
    
    public function listado(Request $request){
        if($request->has('id')){
            return Persona::find($request->id);
    }

    }
    public function busqueda(Request $request){

        if($request->has('nombre')){
            return Persona::where('nombre', 'like', '%'.$request->nombre.'%')->get();
        }
        if($request->has('apellido')){
            return Persona::where('apellido', 'like', '%'.$request->apellido.'%')->get();
        }
        if($request->has('telefono')){
            return Persona::where('telefono', 'like', '%'.$request->telefono.'%')->get();
        }
}

}

