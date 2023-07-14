@extends('layouts.app')

@section('titulo')
    Dashboard
@endsection

@section('contenido')
    <div class="grid grid-cols-4 grid-flow-cols gap-4 bg-slate-400 shadow-2xl shadow-slate-400 rounded-md container mx-auto px-10">
        <div class="bg-slate-200 shadow-xl shadow-slate-200 font-bold text-xl mb-10 col-span-2 rounded-md container mx-auto px-40">
            <div class="container mx-auto">
                <p>Proyectos</p>
            </div>
        </div>
        
        <div class="bg-slate-200 shadow-xl shadow-slate-200 font-bold text-xl mb-10 col-span-2 rounded-md container mx-auto px-40">
            <div class="container mx-auto">
                <p>Colaboradores <?php echo $colaboradores->count()?></p>
            </div>
        </div>
        <div class="bg-slate-200 shadow-xl shadow-slate-200 font-bold text-xl mb-10 col-span-2 rounded-md container mx-auto px-40">
            <div class="container mx-auto">
                <p>Ingresos</p>
            </div>
        </div>
        <div class="bg-slate-200 shadow-xl shadow-slate-200 font-bold text-xl mb-10 col-span-2 rounded-md container mx-auto px-40">
            <div class="container mx-auto">
                <p>Tareas</p>
            </div>
        </div>
    </div>
    
@endsection