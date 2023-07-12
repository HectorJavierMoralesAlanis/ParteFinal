<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('auth.register');
    }

    //Creacion del metodo para almacenar usuarios
    public function store(Request $request){
        $request->request->add(['username'=>Str::slug($request->username)]);

        //Validar campos de fomulario
        $this->validate($request,[
            'name'=>'required|max:50',
            'username'=>'required|unique:users|max:50',
            'email'=>'required|unique:users|email|max:60',
            'password'=>'required|confirmed|min:2',
            'password_confirmation'=>'',
        ]);

        //Insertar datos a la tabla de usuarios
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'password_confirmarion' => $request->password,
        ]);

        //Autenticar un usuario con el metodo "attemp"
        auth()->attempt([
            'email' => $request->email,
            'password' =>$request->password           
        ]);
        return redirect()->route('post.index');
    }
}
