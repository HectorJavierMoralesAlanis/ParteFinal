<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function __construct(){
        //Proteger el constructor 
        $this->middleware('auth')->except(['show','index']);
    }

    //Mostrar el dashboard
    public function index(){
        return view('dashboardAdmin');    
    }
}
