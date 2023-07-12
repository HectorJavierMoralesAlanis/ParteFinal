@extends("layouts.app")

@section('titulo')
    Clientes
@endsection

@section('contenido')
    <div>
        <header>
            <div class="container mx-auto flex justify-between items-center">
                <nav class="md:flex md:items-center md:justify-between">
                    <a href="{{route('registroClientes')}}">Agregar nuevo cliente</a>
                </nav>
            </div>
        </header>

        
        <div class="grid grid-cols-4 gap-4 bg-slate-400 shadow-2xl shadow-slate-400 rounded-md-container mx-auto px-10">
            </div class="bg-slate-200 shadow-xl shadow-slate-200 font-bold text-xl mb-10 col-span-2 rounded-md container mx-auto px-40">
            <div class="container mx-auto">
                <p>Aux</p>
            </div>
        </div>

    </div>
@endsection