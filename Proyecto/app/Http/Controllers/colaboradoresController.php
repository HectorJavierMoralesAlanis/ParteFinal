<?php

namespace App\Http\Controllers;
use App\Models\colaboradores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class colaboradoresController extends Controller
{
    //
    public function index(){
        return view('colaboradores');

    }

    public function create(){
        return view ('colaboradores');
    }
    public function show(colaboradores $colaboradores){
        return view('colaboradores',[
            'colaboradores' => $colaboradores::all()
            
        ]);
        //dd('ola');
    }
    public function showColab(colaboradores $colaboradores,$colaborador){
        return view('colaborador.showColab',[
            'colaboradores' => $colaboradores::all(),'id' => $colaborador
/*
            $colaboradores = DB::table('colaboradores')->get();
            return view('colaborador.showColab')->with('colaboradores',$colaboradores);
*/
        ]);
        //dd('ola');
    }
}
