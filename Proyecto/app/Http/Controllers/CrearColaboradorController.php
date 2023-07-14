<?php

namespace App\Http\Controllers;



use App\Models\colaboradores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CrearColaboradorController extends Controller
{
    //
    public function index() {
        
        return view('crearcolaborador');
    }

    public function create(){
        return view ('crearcolaborador');
    }

    public function store(Request $request){
        $this->validate($request,[
            'nombrecolaborador' => "required|max:255",
            'apellidocolaborador' => "required|max:255",
            'usernamecolaborador'=> "required",
            'passwordcolaborador'=> "required",
            'idcolaborador' => "required",
            'joindatecolaborador' => "required",
            'telefonocolaborador' => "required",
            'companiacolaborador'=> "required",
            'departamentocolaborador'=> "required",
            'designacioncolaborador'=> "required"

        ]);
    $colaboradores = new colaboradores;
    $colaboradores->nombrecolaborador = $request->nombrecolaborador;
    $colaboradores->apellidocolaborador = $request->apellidocolaborador;
    $colaboradores->usernamecolaborador = $request->usernamecolaborador;
    $colaboradores->passwordcolaborador = $request->passwordcolaborador;
    $colaboradores->idcolaborador = $request->idcolaborador;
    $colaboradores->joindatecolaborador = $request->joindatecolaborador;
    $colaboradores->telefonocolaborador = $request->telefonocolaborador;
    $colaboradores->companiacolaborador = $request->companiacolaborador;
    $colaboradores->departamentocolaborador = $request->departamentocolaborador;
    $colaboradores->designacioncolaborador = $request->designacioncolaborador;
    $colaboradores->save();
    
    
    //dd('creaste el proyecto');
    
    return redirect()->route('colaboradores');
    
    }
    public function show(colaboradores $colaboradores ){
        return view('colaboradores',[
            'colaboradores' => $colaboradores
        ]);
    }
}
