<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\colaboradores;
use Illuminate\Support\Facades\DB;

class DcolaboradorController extends Controller
{
    //
    public function index(){
        
        if(auth()->user()->id==1){
            //Credenciales correctas
            $colaboradores = DB::table('colaboradores');
            $clientes = DB::table('clientes');
            $proyectos= DB::table('proyectos');
            //return redirect()->route('post.index',auth()->user()->email);
                return view('dashboardAdmin')->with('colaboradores',$colaboradores,'clientes',$clientes,'proyectos',$proyectos);
            }else{
                $colaborador=colaboradores::find(auth()->user()->id);
                $proyectos = $colaborador->proyectos;
                return view('dahsboardColaborador');
        }
    }
}
