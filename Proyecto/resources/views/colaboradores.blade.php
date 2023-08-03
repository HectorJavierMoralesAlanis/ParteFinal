@extends('layouts.app')

@section('titulo')
    Colaboradores
@endsection

@section('contenido')
    <body class="row staff-grid-row">
        <div class="mb-5">
            <label for="name" class="mb-2 block uppercase text-gray-500 font-bold p-4">
            Nombre del colaborador
            </label>
            <input 
                id="name"
                placeholder="Nombre del colaborador"
                class="border w-full rounded-lg p-2"
                />
            
        </div>
        <div class="mb-5">
            <label for="name" class="mb-2 block uppercase text-gray-500 font-bold p-4">
            ID del colaborador
            </label>
            <input 
                id="id-colaborador"
                placeholder="ID del colaborador"
                class="border w-full rounded-lg p-2"
                />
            
        </div>
        <div class="mb-5 mt-5">
            <nav class="flex gap-2 items-center">
                <a class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer font-bold text-white rounded-lg p-5" href="#">Buscar</a>
                <a class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer font-bold text-white rounded-lg p-5" href="{{ route('crearcolaborador') }}">Agregar colaborador</a>
            </nav>
        </div>

        <main class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                <!--Esta es una primer tarjeta-->

                <div class="bg-white rounded-lg shadow p-6 align-top">
                    <div class="w-8/12 lg:w-6/12 px-5">
                        <img src="{{ asset('img/colaboradores/avatar-02.jpg')}}" alt="imagen de perfil"> 
                    </div>
                    <h4 class="user-name m-t-10 mb-0 text-ellipsis font-bold text-center">
                        <a href="#">John Doe</a>        
                    </h4>
                    <div class="small text-muted text-center">Web Designer</div>  
                </div>

                <!--Aqui termina primer tarjeta-->
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="w-8/12 lg:w-6/12 px-5">
                        <img src="{{ asset('img/colaboradores/avatar-12.jpg')}}" alt="imagen de perfil"> 
                    </div>
                    <h4 class="user-name m-t-10 mb-0 text-ellipsis font-bold text-center">
                        <a href="#">Mike Litorus</a>        
                    </h4>
                    <div class="small text-muted text-center">Android Developer</div>
                </div>

                <!-- RECIBIR Y MOSTRAR LOS COLABORADORES DE PUBLICACION-->
                
                        @if ($colaboradores->count() )
                            @foreach ($colaboradores as $colaborador)
                            <div class="bg-white rounded-lg shadow p-6">
                                <div class="w-8/12 lg:w-6/12 px-5">
                                    <img src="{{ asset('img/colaboradores/avatar-12.jpg')}}" alt="imagen de perfil"> 
                                </div>
                                <h4 class="user-name m-t-10 mb-0 text-ellipsis font-bold text-center">
                                    <a href="#">
                                        {{$colaborador->nombrecolaborador}}</a>        
                                </h4>
                                <div class="small text-muted text-center">
                                    <span>{{    $colaborador->designacioncolaborador    }}</span>
                                </div>
                            </div>
                            @endforeach    
                        </div> 

                        @else
                            <p class="text-gray-600 uppercase text-sm text-center font-bold"> Aun no hay colaboradores registrados </p>
                        @endif
                
            </div>
        </main>
    </body>

@endsection
