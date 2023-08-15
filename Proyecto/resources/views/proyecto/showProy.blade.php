<?php 
    $id=$_GET['id'];
    echo $id;
?>
@extends('layouts.app')
@section('titulo')
    Datos del proyecto
@endsection 

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="w-8/12 lg:w-6/12 px-5">
                <img src="{{ asset('img/colaboradores/proyectos.avif')}}" alt="imagen de perfil" width="400" height="400"> 
            </div>
            <h4 class="user-name m-t-10 mb-0 text-ellipsis font-bold text-center">
                    Nombre del proyecto: {{ $proyectos }}  
            </h4>
            
            <div class="small text-muted text-center">
                    Nombre del cliente: 
            </div>
        </div>        
    </div>
@endsection
