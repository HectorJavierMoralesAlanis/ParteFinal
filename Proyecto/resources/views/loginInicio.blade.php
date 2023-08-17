@extends('layouts.app')

@section('titulo')
    Login
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center">
    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                Email
                </label>
                <input 
                    id="email"
                    name="email"
                    type="email"
                    placeholder="Ingresa tu email"
                    class="border p-3 w-full rounded-lg @error('email') border-red-500
                        @enderror"
                        value="{{ old('email') }}"
                />
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }}</p>
                @enderror
            </div>
        
            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                Password
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
                <input type="checkbox" name="remember"> <label class=" text-gray-500 text-sm"> Mantener mi sesion abierta</label>
            </div>

            <div class="mb-5">
                <a href="{{route('register')}} "class="text-gray-500 text-sm">Crear Cuenta</a>
            </div>
            <input
                type="submit"
                value="Iniciar sesion"
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
            />
        </form>
    </div>
    
    <div>
        <h4>Integrantes</h4>
        <p>Alex Guillermo Castillo Nava</p>
        <p>HectorJavierMorales Alanis</p>
    </div>
</div>
@endsection