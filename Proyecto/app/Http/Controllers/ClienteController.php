<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    //
    public function index(){
        
        $clientes = DB::table('clientes')->get();
        return view('auth.clientes')->with('clientes',$clientes);
    }
}
