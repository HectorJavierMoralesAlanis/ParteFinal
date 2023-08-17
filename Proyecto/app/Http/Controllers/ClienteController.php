<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    //

    public function index(){
        $clientes = DB::table('clientes')->get();

        return view('auth.clientes')->with('clientes',$clientes);
    }

    public function destroy(Cliente $clientes,$id){
        $clientes= Cliente::find($id);
        #dd($clientes);
        $clientes->delete();   
        return redirect()->route('clientes');
    }

    public function edit(Cliente $clientes,$id){
        #clientes=Cliente::find($id);
        $clientes = DB::table('clientes')->get();
        $clientes = $clientes[$id];

        #dd($clientes);
        return view('auth.clientesAct')->with("clientes",$clientes);
    }
    
    public function update(Request $request,Cliente $cliente){
        $cliente->nombreC=$request->nombreC;
        $cliente->apellidoC=$request->apellidoC;
        $cliente->username=$request->username;
        $cliente->emailC=$request->emailC;
        $cliente->pasword=$request->password;
        $cliente->telefonoC=$request->telefonoC;
        $cliente->compNombreC=$request->compNombreC;
        $cliente->save();
        return redirect()->route('clientes');
    }
}
