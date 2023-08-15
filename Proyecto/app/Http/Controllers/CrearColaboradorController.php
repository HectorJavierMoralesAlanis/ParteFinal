<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\colaboradores;
use Illuminate\Support\Facades\DB;
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
            'designacioncolaborador'=> "required",

        ]);

        colaboradores::create([
            'nombrecolaborador' => $request->nombrecolaborador,
            'apellidocolaborador' => $request->apellidocolaborador,
            'usernamecolaborador' => $request->usernamecolaborador,
            'passwordcolaborador' => $request->passwordcolaborador,
            'joindatecolaborador' => $request->joindatecolaborador,
            'telefonocolaborador' => $request->telefonocolaborador,
            'companiacolaborador' => $request->companiacolaborador,
            'departamentocolaborador' => $request->departamentocolaborador,
            'designacioncolaborador' => $request->designacioncolaborador,

        ]);
        return redirect()->route('colaboradores');


        $colaboradores = DB::table('colaboradores')->get();
        return view('colaboradores')->with('colaboradores',$colaboradores);
    
    }
    

}
