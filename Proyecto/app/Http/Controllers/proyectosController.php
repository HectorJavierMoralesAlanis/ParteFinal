<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class proyectosController extends Controller
{
    //
    public function index() {
        $proyectos = DB::table('proyectos')->get();
        return view('proyectos')->with('proyectos',$proyectos);
    }
}
