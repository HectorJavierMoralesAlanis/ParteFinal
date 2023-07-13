<?php

namespace App\Http\Controllers;

use App\Models\proyectos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CrearProyectoController extends Controller
{
    //
    public function index() {
        
        return view('crearproyecto');
    }

    public function create(){
        return view ('crearproyecto');
    }

    public function store(Request $request){
        $this->validate($request,[
            'nombreproyecto' => "required|max:255",
            'nombrecliente' => "required|max:255",
            'descripcionproyecto'=> "required",
            'fechaempezado'=> "required",
            'fechaterminado' => "required",
            'presupuesto' => "required",
            'prioridad' => "required",
            'liderproyecto'=> "required",
            'nombreteam'=> "required"
        ]);
    $proyecto = new proyectos;
    $proyecto->nombreproyecto = $request->nombreproyecto;
    $proyecto->nombrecliente = $request->nombrecliente;
    $proyecto->descripcionproyecto = $request->descripcionproyecto;
    $proyecto->fechaempezado = $request->fechaempezado;
    $proyecto->fechaterminado = $request->fechaterminado;
    $proyecto->presupuesto = $request->presupuesto;
    $proyecto->prioridad = $request->prioridad;
    $proyecto->liderproyecto = $request->liderproyecto;
    $proyecto->nombreteam = $request->nombreteam;
    $proyecto->save();
    
    
    //dd('creaste el proyecto');
    
    return redirect()->route('proyectos');
    
    }
}
