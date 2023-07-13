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
            'descripcionproyecto'=> "required",
            'fechaterminado' => "required",
            'liderproyecto'=> "required"
        ]);
    $proyecto = new proyectos;
    $proyecto->nombreproyecto = $request->nombreproyecto;
    $proyecto->descripcionproyecto = $request->descripcionproyecto;
    $proyecto->fechaterminado = $request->fechaterminado;
    $proyecto->liderproyecto = $request->liderproyecto;
    $proyecto->save();
    
    
    //dd('creaste el proyecto');
    
    return redirect()->route('proyectos');
    
    }
}
