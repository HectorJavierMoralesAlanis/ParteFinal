@extends('layouts.app')

@section('titulo')
    Crear cliente
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap=10 md:items-center">
        <div class="md:w-4/12 bg-neutral-800 p-6 rounded-lg shadow-xl">
            <form method="POST" action='{{route('registroClientes')}}' novalidate>

                @csrf

                <div class="mb-5">
                    <label for="nombreC" class="mb-2 black uppercase text-gray-500 font-bold">
                        Nombre del cliente
                    </label>
                    <input
                        id="nombreC"
                        name="nombreC"
                        type="text"
                        placeholder="Ingrese el nombre del cliente"
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
                        placeholder="Ingrese el apellido del cliente"
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
                        placeholder="Ingrese el username del cliente"
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
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                    Contrasena
                    </label>
                    <input 
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Ingresa tu password de registro"
                        class="border p-3 w-full rounded-lg @error('password') border-red-500
                        @enderror"
                    />
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                    Repetir contrasena
                    </label>
                    <input 
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        placeholder="Repite tu password de registro"
                        class="border p-3 w-full rounded-lg"
                    />
                </div>

                <div class="mb-5">
                    <label for="telefonoC" class="mb-2 black uppercase text-gray-500 font-bold">
                        Telefono del cliente
                    </label>
                    <input
                        id="telefonoC"
                        name="telefonoC"
                        type="text"
                        placeholder="Ingrese el telefono del cliente"
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
                        placeholder="Ingrese el nombre de la compañia del cliente"
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
                    value="Crear cliente"
                    class="bg-green-600 hover:bg-gren-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text=white rounded-lg"
                />

            </form>
        </div>
    </div>
@endsection