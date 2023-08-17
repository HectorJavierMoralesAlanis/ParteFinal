@extends('layouts.app')

@section('titulo')
    Crear cliente
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap=10 md:items-center container mx-auto">
        <div class="md:w-4/12 bg-neutral-800 p-6 rounded-lg shadow-xl">

            <form method="POST" action="{{route('cliente.update',$clientes->id)}}" novalidate>
                @csrf
                @method('put')
                
                <div class="mb-5">
                    <label for="nombreC" class="mb-2 black uppercase text-gray-500 font-bold">
                        Nombre del cliente
                    </label>
                    <input
                        id="nombreC"
                        name="nombreC"
                        type="text"
                        placeholder="{{$clientes->nombreC}}"
                        class="border p-2 w-full rounded tg
                        @error('nombreC')
                            border-red-500
                        @enderror"
                        value="{{old('nombreC')}}"
                    >
                    @error('nombreC')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="apellidoC" class="mb-2 black uppercase text-gray-500 font-bold">
                        Apellido del cliente
                    </label>
                    <input
                        id="apellidoC"
                        name="apellidoC"
                        type="text"
                        placeholder="{{$clientes->apellidoC}}"
                        class="border p-2 w-full rounded tg
                        @error('apellidoC')
                            border-red-500
                        @enderror"
                        value="{{old('apellidoC')}}"
                    >
                    @error('apellidoC')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="usernameC" class="mb-2 black uppercase text-gray-500 font-bold">
                        Username del cliente
                    </label>
                    <input
                        id="usernameC"
                        name="usernameC"
                        type="text"
                        placeholder="{{$clientes->username}}"
                        class="border p-2 w-full rounded tg
                        @error('usernameC')
                            border-red-500
                        @enderror"
                        value="{{old('usernameC')}}"
                    >
                    @error('usernameC')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="emailC" class="mb-2 black uppercase text-gray-500 font-bold">
                        Email del cliente
                    </label>
                    <input
                        id="emailC"
                        name="emailC"
                        type="email"
                        placeholder="{{$clientes->emailC}}
                        class="border p-2 w-full rounded tg
                        @error('emailC')
                            border-red-500
                        @enderror"
                        value="{{old('emailC')}}"
                    >
                    @error('emailC')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 black uppercase text-gray-500 font-bold">
                        Password del cliente
                    </label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Ingrese el password del cliente"
                        class="border p-2 w-full rounded tg
                        @error('password')
                            border-red-500
                        @enderror"
                        value="{{old('password')}}"
                    >
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 black uppercase text-gray-500 font-bold">
                        Confirme la password del cliente
                    </label>
                    <input
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        placeholder="Reingrese el password del cliente"
                        class="border p-2 w-full rounded tg
                        @error('password_confirmation')
                            border-red-500
                        @enderror"
                        value="{{old('password_confirmation')}}"
                    >
                    @error('password_confirmation')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="telefonoC" class="mb-2 black uppercase text-gray-500 font-bold">
                        Telefono del cliente
                    </label>
                    <input
                        id="telefonoC"
                        name="telefonoC"
                        type="text"
                        placeholder="{{$cliente->telefonoC}}"
                        class="border p-2 w-full rounded tg
                        @error('telefonoC')
                            border-red-500
                        @enderror"
                        value="{{old('telefonoC')}}"
                    >
                    @error('telefonoC')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="compNombreC" class="mb-2 black uppercase text-gray-500 font-bold">
                        Nombre de la compañia del cliente
                    </label>
                    <input
                        id="compNombreC"
                        name="compNombreC"
                        type="text"
                        placeholder="{{$clientes->comNombreC}}"
                        class="border p-2 w-full rounded tg
                        @error('compNombreC')
                            border-red-500
                        @enderror"
                        value="{{old('compNombreC')}}"
                    >
                    @error('compNombreC')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <input
                    type="submit"
                    value="Actualizar cliente"
                    class="bg-green-600 hover:bg-gren-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text=white rounded-lg"
                />
            </form>
        </div>
    </div>
@endsection