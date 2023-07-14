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
            'passwordC'=>'required|confirmed|min:4',
            'repasswordC'=>'',
            'telefonoC'=>'required|min:10|max:13',
            'compNombreC'=>'required|min:10',
        ]);

        Cliente::create([
            'nombreC'=>$request->nombreC,
            'apellidoC'=>$request->apellidoC,
            'usernameC'=>$request->usernameC,
            'emailC'=>$request->emailC,
            'passwordC'=>Hash::make($request->passwordC),
            'repasswordC'=>$request->passwordC,
            'telefonoC'=>$request->telefonoC,
            'compNombreC'=>$request->compNombreC,
        ]);

        return redirect()->route('auth.clientes');
    }
}
