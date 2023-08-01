<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    public function index(){
        return view('loginInicio');
    }

    //Metodo de validacion de formulario de laogin
    public function store(Request $request){
        //Depurar para ver su funcionalidad
        $this->validate($request,[
        'email' => 'required|email',
        'password' => 'required'
        ]);

        //Valacion de credenciales correctas
        if(!auth()->attempt($request->only('email','password'),$request->remember)){
            //Utilizar directiva "with" para llenar los valores de la sesion
            return back()->with('mensaje','credenciales incorrectas');
        }
        return redirect()->route('dcolaborador');
        /*
        if(auth()->user()->id==1){
        //Credenciales correctas
        $colaboradores = DB::table('colaboradores');
        $clientes = DB::table('clientes');
        $proyectos= DB::table('proyectos');
        //return redirect()->route('post.index',auth()->user()->email);
            return view('dashboardAdmin')->with('colaboradores',$colaboradores,'clientes',$clientes,'proyectos',$proyectos);
        }else{
            return view('dahsboardColaborador');
        }*/
    }
}
