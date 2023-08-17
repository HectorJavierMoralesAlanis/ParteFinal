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
    public function destroy(Cliente $clientes){
        $clientes->delete();   
        return redirect()->route('clientes');
    }
}
