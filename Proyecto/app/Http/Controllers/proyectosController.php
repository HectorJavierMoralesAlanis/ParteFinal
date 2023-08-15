<?php

namespace App\Http\Controllers;

use App\Models\proyectos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class proyectosController extends Controller
{
    //
    public function index(proyectos $proyectos) {
        ##$proyectos = DB::table('proyectos')->get();
        return view('proyectos');#->with('proyectos',$proyectos);
    }
    public function show(proyectos $proyectos){
        return view('proyectos',[
            'proyectos' => $proyectos::all()
        ]);
    }
    public function showProy(proyectos $proyectos,$proyecto){
        $proyectoN = $proyecto;
        foreach($proyectos as $pro):
            if($pro->id == $proyecto->id):
                $proyectoN = $pro;
                break;
            endif;
        endforeach;
        return view('proyecto.showProy',[
            'proyectos' => $proyectoN::all()
        ]);
    }


}
