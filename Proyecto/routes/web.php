<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroCliente;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\proyectosController;
use App\Http\Controllers\colaboradoresController;
use App\Http\Controllers\CrearProyectoController;
use App\Http\Controllers\CrearColaboradorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('loginInicio');
});



Route::get('/clientes',[ClienteController::class,'index'])->name("clientes");
Route::get('/dashboard',[DashboardController::class,'index'])->name("dashboard");
Route::get("/registroClientes",[RegistroCliente::class,'index'])->name('registroClientes');
Route::post("/registroClientes",[RegistroCliente::class,'store']);

//Ruta para mostrar la vista de login
Route::get('/login',[LoginController::class,'index'])->name("login");
Route::post('/login',[LoginController::class,'store']);

//Ruta para mostrar la vista de register
Route::get('/register',[RegisterController::class,'index'])->name('register');

//Ruta para almacenar los usuarios 
Route::post('/register',[RegisterController::class,'store']);

//Ruta para mostrar el dashboard
Route::get('/dashboard',[PostController::class,'index'])->name('post.index');

Route::get('/proyectos', [proyectosController::class, 'index'])->name('proyectos');
Route::get('/crearproyecto', [CrearProyectoController::class, 'index'])->name('crearproyecto');
Route::post('/crearproyecto',[CrearProyectoController::class, 'store']);

Route::get('/colaboradores', [colaboradoresController::class, 'index'])->name('colaboradores');
Route::post('/crearcolaborador',[CrearColaboradorController::class, 'store']);

Route::get('/crearcolaborador', [CrearColaboradorController::class, 'index'])->name('crearcolaborador');
Route::post('/crearcolaborador',[CrearColaboradorController::class, 'store']);

