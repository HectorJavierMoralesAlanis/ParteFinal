<?php

namespace App\Http\Controllers;



use App\Models\proyectos;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class CrearProyectoController extends Controller
{
    //
    public function index() {
        
        return view('crearcolaborador');
    }


    public function store(Request $request){
        $this->validate($request,[
            'nombreproyecto' => "required|max:255",
            'nombrecliente' => "required|max:255",
            'descripcionproyecto'=> "required",
            'fechaempezado'=> "required",
            'fechaterminado' => "required",
            'presupuesto' => "required",
            'prioridad'=> "required",
            'liderproyecto'=> "required",
            'nombreteam'=> "required"

        ]);
        proyectos::create([
            'nombreproyectos' => $request->nombreproyectos,
            'nombreclientes' => $request->nombrecliente,
            'descripcionproyecto' => $request->descripcionproyecto,
            'fechaempezado' => $request->fechaempezado,
            'fechaterminado' => $request->fechatermiando,
            'presupuesto' => $request->presupuesto,
            'prioridad' => $request->prioridad,
            'liderproyecto' => $request->liderproyecto,
            'nombreteam' => $request->nombreteam,
        ]);
        $proyectos = DB::table('proyectos');
        return view('proyectos')->with('proyectos',$proyectos);
    
    }
    

}

