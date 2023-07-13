@extends('layouts.app')
<!--
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
-->

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('titulo')
    Crear proyecto
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center">
    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
        <form action="{{ route('crearproyecto')}}" method="POST" novalidate>
            @csrf
            <div class="mb-5">
                <label for="nombreproyecto" class="mb-2 block uppercase text-gray-500 font-bold">
                Ingresa el nombre del proyecto:
                </label>
                <input 
                    id="nombreproyecto"
                    name="nombreproyecto"
                    type="text"
                    placeholder="Nombre del proyecto"
                    class="border p-3 w-full rounded-lg"
                />
            </div>

            <div class="mb-5">
                <label for="descripcionproyecto" class="mb-2 block uppercase text-gray-500 font-bold">
                Ingresa la descripcion del proyecto:
                </label>
                <textarea 
                    id="descripcionproyecto"
                    name="descripcionproyecto"
                    type="text"
                    placeholder="Descripcion del proyecto"
                    class="border p-3 w-full rounded-lg "
                >
                </textarea>
            </div>
            <div class="mb-5">
                <label for="fechaterminado" class="mb-2 block uppercase text-gray-500 font-bold">
                Ingrese la fecha de Deadline:
                </label>
                <input 
                    id="fechaterminado"
                    name="fechaterminado"
                    type="text"
                    placeholder="Fecha de finalizado"
                    class="border p-3 w-full rounded-lg "
                />
            </div>
            <div class="mb-5">
                <label for="liderproyecto" class="mb-2 block uppercase text-gray-500 font-bold">
                Ingrese el nombre del lider del proyecto:
                </label>
                <input 
                    id="liderproyecto"
                    name="liderproyecto"
                    type="text"
                    placeholder="Nombre del lider"
                    class="border p-3 w-full rounded-lg"
                />
            </div>
            <div class="md:w-1/2 px-10">

                <form action="#"  enctype="multipart/form-data" id="dropzone" 
                class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center p-5">
                Drop your file...
                
                </form>
    
            </div>
            <input
                type="submit"
                value="Crear proyecto"
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
            />
        </form>
    </div>
</div>
@endsection
