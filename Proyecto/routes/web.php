<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroCliente;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\proyectosController;
use App\Http\Controllers\DcolaboradorController;
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
Route::get("/registroClientes",[RegistroCliente::class,'index'])->name('registroClientes');
Route::post("/registroClientes",[RegistroCliente::class,'store']);

//Ruta para mostrar la vista de login
Route::get('/login',[LoginController::class,'index'])->name("login");
//Ruta para el inicio de sesion
Route::post('/login',[LoginController::class,'store']);

//Ruta para enviar al dashboard
Route::post('/inicio',[PostController::class,'index'])->name("post.index");

//Ruta para cerrar sesion
Route::get('logout',[LogoutController::class,'store'])->name('logout');

//Ruta para mostrar la vista de register
Route::get('/register',[RegisterController::class,'index'])->name('register');

//Ruta para almacenar los usuarios 
Route::post('/register',[RegisterController::class,'store']);

//Ruta para mostrar el dashboard del admin
Route::get('/dashboard',[PostController::class,'index'])->name('post.index');

//Ruta para mostrar el dahsboard del colaborador
Route::get('/inicio',[DcolaboradorController::class,'index'])->name('dcolaborador');

//Ruta para mostrar los proyectos
Route::get('/proyectos', [proyectosController::class, 'index'])->name('proyectos');

//Ruta para la creacion de proyectos
Route::get('/crearproyecto', [CrearProyectoController::class, 'index'])->name('crearproyecto');

//Ruta para almacenar el proyecto
Route::post('/crearproyecto',[CrearProyectoController::class, 'store']);

//Ruta para mostrar los colaboradores
//Route::get('/colaboradores', [colaboradoresController::class, 'index'])->name('colaboradores');

//Route::post('/crearcolaborador',[CrearColaboradorController::class, 'store']);

//Ruta para mostrar la creacion de los colaboradores
//Route::get('/crearcolaborador', [CrearColaboradorController::class, 'index'])->name('crearcolaborador');

//Ruta para almacenar los colaboradores
//Route::post('/crearcolaborador',[CrearColaboradorController::class, 'store']);

Route::get('/colaboradores', [colaboradoresController::class, 'index'])->name('colaboradores');
//Route::get('/colaboradores', [colaboradoresController::class, 'show'])->name('colaboradores');
Route::get('/{colaborador:usernamecolaborador}',[colaboradoresController::class, 'showColab'])->name('colaboradores.show');

Route::get('/crearcolaborador', [CrearColaboradorController::class, 'index'])->name('crearcolaborador');
Route::post('/crearcolaborador',[CrearColaboradorController::class, 'store']);
