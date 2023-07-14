<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistroCliente extends Controller
{
    //
    public function index(){
        return view('auth.clientesregistro');
    }

    public function store(Request $request){
        
        $request->request->add(['username'=>Str::slug($request->username)]);
        dd('ded');
        //validar campos de formulario 
        $this->validate($request,[
            'nombreC'=>'required|max:40',
            'apellidoC'=>'required|max:40',
            'username'=>'required|max:40',
            'emailC'=>'required|email|max:60',
            'password'=>'required|min:2',
            'password_confirmation'=>'',
            'telefonoC'=>'required|min:10|max:13',
            'compNombreC'=>'required|min:10'
        ]);
        dd('entro');
        /*
        Cliente::create([
            'nombreC'=>$request->nombreC,
            'apellidoC'=>$request->apellidoC,
            'username'=>$request->usernameC,
            'emailC'=>$request->emailC,
            'password'=>Hash::make($request->password),
            'password_confirmation'=>$request->password,
            'telefonoC'=>$request->telefonoC,
            'compNombreC'=>$request->compNombreC,
        ]);
        dd('yeah baby');*/
        //return view('auth.clientes');
    }
}
