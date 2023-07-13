<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades;

class ArchivoController extends Controller
{
    //
    //
    public function store(Request $request){
        //return "Desde imagen controler";
        $archivo = $request->file('file');

        $nombreArchivo = Str::uuid() . "." . $archivo->extension();

        $archivoServidor = Image::make($archivo);

        //Tamano de la imagen (corta la imagen)
        $archivoServidor->fit(1000,1000);

        //apunta hacia la carpeta public con el nombre de la imagen
        $archivoPath = public_path('uploads') . '/' . $nombreArchivo;
        
        //mueve la imagen a esa ruta una vez que ya fue procesada
        $archivoServidor->save($archivoPath);

        return response()->json(['archivo' => $nombreArchivo]);
    }
}
