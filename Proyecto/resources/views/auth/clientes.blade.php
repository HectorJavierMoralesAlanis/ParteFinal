@extends("layouts.app")

@section('titulo')
    Clientes
@endsection

@section('contenido')
    <div>
        <header>
            <div class="container mx-auto flex justify-between items-center">
                <nav class="md:flex md:items-center md:justify-between">
                    <a href="{{route('registroClientes')}}" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">Agregar nuevo cliente</a>
                </nav>
            </div>
        </header>
        
        <section>
            <div class="bg-slate-400 shadow-2xl shadow-slate-400 rounded-md container mx-auto px-10">
                <table class="bg-slate-200 shadow-xl shadow-slate-200 font-bold text-xl mb-10 rounded-md container mx-auto px-40 p-10 text-center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Compañia</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $cliente)
                        <tr>
                            <td>{{$cliente->id}}</td>
                            <td>{{$cliente->nombreC}}</td>
                            <td>{{$cliente->telefonoC}}</td>
                            <td>{{$cliente->emailC}}</td>
                            <td>{{$cliente->compNombreC}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection