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
            'usernameC'=>'required|unique:clientes|max:40',
            'emailC'=>'required|unique:clientes|email|max:60',
            'password'=>'required|confirmed|min:2',
            'password_confirmation'=>'',
            'telefonoC'=>'required|min:10|max:13',
            'compNombreC'=>'required|min:10',
        ]);

        //Creacion Cliente
        Cliente::create([
            'nombreC'=>$request->nombreC,
            'apellidoC'=>$request->apellidoC,
            'usernameC'=>$request->usernameC,
            'emailC'=>$request->emailC,
            'password' => Hash::make($request->password),
            'password_confirmation' => $request->password,
            'telefonoC'=>$request->telefonoC,
            'compNombreC'=>$request->compNombreC,
        ]);
        
        return redirect()->route('auth.clientes');
    }
}
