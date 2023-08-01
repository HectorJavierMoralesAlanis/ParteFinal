@extends('layouts.app')

@section('titulo')
    Clientes
@endsection

@section('contenido')
    <body class="row staff-grid-row">

        <div class="mb-5">
            <label for="name" class="mb-2 block uppercase text-gray-500 font-bold p-4">
            Nombre del cliente <?php echo $colaboradores->count()?>
            </label>
            <input 
                id="name-cliente"
                placeholder="Nombre del cliente"
                class="border w-full rounded-lg p-2"
                />
            
        </div>
        <div class="mb-5">
            <label for="name" class="mb-2 block uppercase text-gray-500 font-bold p-4">
            ID del cliente
            </label>
            <input 
                id="id-cliente"
                placeholder="ID del cliente"
                class="border w-full rounded-lg p-2"
                />
            
        </div>
        <div class="mb-5">
            <input
                type="submit"
                value="Buscar"
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer  font-bold text-white rounded-lg p-5"
                />
        </div>


            <main class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">    
                    <!--Esta es una primer tarjeta-->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h4 class="text-lg font-semibold text-gray-800 mb-4">
                            <a href="#">Delta Infotech</a>
                        </h4>
                        <h5 class="user-name m-t-10 mb-0 text-ellipsis">
                            <a href="#">Tressa Wexler</a>        
                        </h5>
                        <div class="small text-muted">Manager</div>
                        
                        <input
                            type="submit"
                            value="Mensaje"
                            class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer  font-bold p-2 shadow-xl text-white rounded-lg"
                        />
                        <input
                            type="submit"
                            value="Ver Perfil"
                            class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer  font-bold p-2 shadow-xl text-white rounded-lg"
                        />
                    </div>
                    <!--Aqui termina primer tarjeta-->
                    
                    
                    <div class="bg-white rounded-lg shadow p-6">
                        <h4 class="text-lg font-semibold text-gray-800 mb-4">
                            <a href="#">Global Technologies</a>
                        </h4>
                        <h5 class="user-name m-t-10 mb-0 text-ellipsis">
                            <a href="#">Barry Cuda</a>        
                        </h5>
                        <div class="small text-muted">CEO</div>
                        
                        <input
                            type="submit"
                            value="Mensaje"
                            class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer  font-bold p-2 shadow-xl text-white rounded-lg"
                        />
                        <input
                            type="submit"
                            value="Ver Perfil"
                            class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer  font-bold p-2 shadow-xl text-white rounded-lg"
                        />
                    </div>
    

                    <div class="bg-white rounded-lg shadow p-6">
                        <h4 class="text-lg font-semibold text-gray-800 mb-4">
                            <a href="#">Mustang Technologies</a>
                        </h4>
                        <h5 class="user-name m-t-10 mb-0 text-ellipsis">
                            <a href="#">Daniel Deacon</a>        
                        </h5>
                        <div class="small text-muted">CEO</div>
                        
                        <input
                            type="submit"
                            value="Mensaje"
                            class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer  font-bold p-2 shadow-xl text-white rounded-lg"
                        />
                        <input
                            type="submit"
                            value="Ver Perfil"
                            class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer  font-bold p-2 shadow-xl text-white rounded-lg"
                        />
                    </div>
    
                    
    
                    <div class="bg-white rounded-lg shadow p-6">
                        <h4 class="text-lg font-semibold text-gray-800 mb-4">
                            <a href="#">Cream Inc</a>
                        </h4>
                        <h5 class="user-name m-t-10 mb-0 text-ellipsis">
                            <a href="#">Ruby Bartlett</a>        
                        </h5>
                        <div class="small text-muted">CEO</div>
                        
                        <input
                            type="submit"
                            value="Mensaje"
                            class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer  font-bold p-2 shadow-xl text-white rounded-lg"
                        />
                        <input
                            type="submit"
                            value="Ver Perfil"
                            class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer  font-bold p-2 shadow-xl text-white rounded-lg"
                        />
                    </div>
                    <!-- 
                        Aqui se pueden agregar mas tarjetas 
                    -->
                </div>
            </main>
        </body>

@endsection