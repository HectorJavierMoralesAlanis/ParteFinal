<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\colaboradores;
use Illuminate\Support\Facades\DB;

class colaboradoresController extends Controller
{
    //
    public function index(){
        $colaborador = DB::table('colaboradores')->get();
        return view('colaboradores')->with('colaboradores',$colaborador);
    }

}
