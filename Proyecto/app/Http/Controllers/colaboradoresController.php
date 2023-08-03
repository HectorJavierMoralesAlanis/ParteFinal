<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\colaboradores;
use Illuminate\Support\Facades\DB;

class colaboradoresController extends Controller
{
    //
    public function index(){
        $colaborador = DB::table('colaboradores')->get();
        return view('colaboradores')->with('colaboradores',$colaborador);
    }
    /*
    public function create(){
        return view ('colaboradores');
    }
    public function show(colaboradores $colaboradores){
        return view('colaboradores',[
            'colaboradores' => $colaboradores::all()
            
        ]);
        //dd('ola');
    }
    public function showColab(colaboradores $colaboradores){
        return view('crearcolaborador',[
            'colaboradores' => $colaboradores::all()
            
        ]);
        //dd('ola');
    }*/
}
