<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\colaboradores;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class CrearColaboradorController extends Controller
{
    //
    public function index() {
        
        return view('crearcolaborador');
    }


    public function store(Request $request){
        $this->validate($request,[
            'nombrecolaborador' => "required|max:255",
            'apellidocolaborador' => "required|max:255",
            'usernamecolaborador'=> "required",
            'passwordcolaborador'=> "required",
            'joindatecolaborador' => "required",
            'telefonocolaborador' => "required",
            'companiacolaborador'=> "required",
            'departamentocolaborador'=> "required",
            'designacioncolaborador'=> "required"
        ]);
        
        $colaboradores = new colaboradores;
        $colaboradores->nombrecolaborador = $request->nombrecolaborador;
        $colaboradores->apellidocolaborador = $request->apellidocolaborador;
        $colaboradores->usernamecolaborador = Str::slug($request->usernamecolaborador);
        $colaboradores->passwordcolaborador = Hash::make($request->passwordcolaborador);
        $colaboradores->joindatecolaborador = $request->joindatecolaborador;
        $colaboradores->telefonocolaborador = $request->telefonocolaborador;
        $colaboradores->companiacolaborador = $request->companiacolaborador;
        $colaboradores->departamentocolaborador = $request->departamentocolaborador;
        $colaboradores->designacioncolaborador = $request->designacioncolaborador;
        $colaboradores->save();
        
    
    //dd('creaste el proyecto');
    
    return redirect()->route('colaboradores');
    
    }
    

}
