<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function __construct(){
        //Proteger el constructor 
        $this->middleware('auth')->except(['show','index']);
    }

    //Mostrar el dashboard
    public function index(){
        if(auth()->user()->id==1){
            //Credenciales correctas
                $colaboradores = DB::table('colaboradores');
                $clientes = DB::table('clientes');
                $proyectos = DB::table('proyectos');
                //return redirect()->route('post.index',auth()->user()->email);
                return view ('dashboardAdmin')->with('colaboradores',$colaboradores)->with('clientes',$clientes)->with('proyectos',$proyectos);
    
            }else{
                $colaboradores = DB::table('colaboradores');
                $clientes = DB::table('clientes');
                $proyectos = DB::table('proyectos');
                return view('dahsboardColaborador')->with('colaboradores',$colaboradores)->with('clientes',$clientes)->with('proyectos',$proyectos);
        }    
    }
}
