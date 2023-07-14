@extends('layouts.app')

@section('titulo')
    Proyectos
@endsection

@section('contenido')
    <body class="row staff-grid-row">
        <div class="sidebar p-5" id="sidebar">
            <div class="bg-white rounded-lg shadow p-6 align-top">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="submenu">
                            <ul class="">
                                <li><a href="#" class="font-light"> Admin Dashboard</a></li>
                                <li><a href="{{ route('colaboradores') }}" class="font-light"> Colaborador Dashboard</a></li>
                                <li><a href="{{ route('proyectos') }}" class="font-light"> Proyectos</a></li>
                                <li><a href="#" class="font-light"> Clientes</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mb-1">
            <label for="name" class="mb-0 block uppercase text-gray-500 font-bold p-4">
            Nombre del proyecto
            </label>
            <input 
                id="name"
                placeholder="Nombre del colaborador"
                class="border w-full rounded-lg p-2"
            />
            
        </div>
        <div class="mb-5">
            <label for="name" class="mb-0 block uppercase text-gray-500 font-bold p-4">
            Nombre del colaborador
            </label>
            <input 
                id="name-colaborador"
                placeholder="Nombre del colaborador"
                class="border w-full rounded-lg p-2"
            />
            
        </div>
        <div class="mb-5 mt-5">
            <nav class="flex gap-2 items-center">
                <a class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer font-bold text-white rounded-lg p-5" href="#">Buscar</a>
                <a class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer font-bold text-white rounded-lg p-5" href="{{ route('crearproyecto') }}">Crear proyecto</a>
            </nav>
        </div>

        
            <main class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                <!--Esta es una primer tarjeta-->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="font-bold text-center">
                        <a href="#">Titulo del proyecto</a>        
                    </h3>
                    <div class="font-bold text-center">
                        1 tareas abiertas, 9 tareas completos...
                    </div>
                    <div class="font-light text-center">
                        Descripcion del proyecto en tarjeta...
                    </div>
                    <div class="font-bold text-left">
                        Deadline:
                    </div>
                    <div class="font-light text-left">
                        fecha...
                    </div>
                    <div class="font-bold text-left">
                        Lider de proyecto:
                    </div>
                    <div class="font-light text-left">
                        Nombre del administrador...
                    </div>
                    <div class="font-bold text-left">
                        Conformado por:
                    </div>
                    <div class="font-light text-left">
                        integrantes...
                    </div>
                </div>
                <!--Aqui termina primer tarjeta-->
                <!--Esta es una segunda tarjeta-->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="font-bold text-center">
                        <a href="#">Titulo del proyecto</a>        
                    </h3>
                    <div class="font-bold text-center">
                        3 tareas abiertas, 7 tareas completos...
                    </div>
                    <div class="font-light text-center">
                        Descripcion del proyecto en tarjeta...
                    </div>
                    <div class="font-bold text-left">
                        Deadline:
                    </div>
                    <div class="font-light text-left">
                        fecha...
                    </div>
                    <div class="font-bold text-left">
                        Lider de proyecto:
                    </div>
                    <div class="font-light text-left">
                        Nombre del administrador...
                    </div>
                    <div class="font-bold text-left">
                        Conformado por:
                    </div>
                    <div class="font-light text-left">
                        integrantes...
                    </div> 
                </div>
                <!--Aqui termina segunda tarjeta-->
            </div>
        </main>
    </body>

@endsection