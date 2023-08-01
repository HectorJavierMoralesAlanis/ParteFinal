<?php

namespace App\Http\Controllers;
use App\Models\colaboradores;
use Illuminate\Http\Request;

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
    } /*
    public function showColab(colaboradores $colaboradores){
        return view('colaboradores.show',[
            'colaboradores' => $colaboradores::all()
            
        ]);
        //dd('ola');
    }*/
}
