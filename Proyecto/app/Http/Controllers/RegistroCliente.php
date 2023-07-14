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

        //validar campos de formulario 
        $this->validate($request,[
            'nombreC'=>'required|max:40',
            'apellidoC'=>'required|max:40',
            'username'=>'required|unique:clientes|max:40',
            'emailC'=>'required|unique:clientes|email|max:60',
            'password'=>'required|confirmed|min:2',
            'telefonoC'=>'required|min:10|max:13',
            'compNombreC'=>'required|min:10',
        ]);
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
        
        return view('auth.clientes');
    }
}
