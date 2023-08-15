@extends('layouts.app')

@section('titulo')
    Datos del colaborador
@endsection 

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="w-8/12 lg:w-6/12 px-5">
                <img src="{{ asset('img/colaboradores/colaboradores.avif')}}" alt="imagen de perfil" width="400" height="400"> 
            </div>
            @foreach($colaboradores as $colaborador)

                @if($colaborador->nombrecolaborador == $id)
                    <h4 class="user-name m-t-10 mb-0 text-ellipsis font-bold text-center">
                            Nombre:   {{$colaborador->nombrecolaborador}} 
                    </h4>
                    <div class="small text-muted text-center">
                            Designacion: {{$colaborador->designacioncolaborador}}
                    </div>
                @endif
            @endforeach
        </div>        
    </div>
@endsection
