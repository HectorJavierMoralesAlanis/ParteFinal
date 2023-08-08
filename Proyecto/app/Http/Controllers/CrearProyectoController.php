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
        $clientes = DB::table('clientes')->get();
        return view('crearproyecto')->with('clientes',$clientes);
    }
    public function store(Request $request){
        $this->validate($request,[
            'nombreproyecto' => "required|max:255",
            'cliente_id' => "required|max:255",
            'descripcionproyecto'=> "required",
            'fechaempezado'=> "required",
            'fechaterminado' => "required",
            'presupuesto' => "required",
            'prioridad'=> "required",
            'liderproyecto'=> "required",
            'nombreteam'=> "required"
        ]);
        proyectos::create([
            'nombreproyecto' => $request->nombreproyecto,
            'cliente_id' => $request->cliente_id,
            'descripcionproyecto' => $request->descripcionproyecto,
            'fechaempezado' => $request->fechaempezado,
            'fechaterminado' => $request->fechaterminado,
            'presupuesto' => $request->presupuesto,
            'prioridad' => $request->prioridad,
            'liderproyecto' => $request->liderproyecto,
            'nombreteam' => $request->nombreteam,
        ]);
        $proyectos = DB::table('proyectos')->get();
        return view('proyectos')->with('proyectos',$proyectos);
    }
}

