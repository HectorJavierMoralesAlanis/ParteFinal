@extends('layouts.app')


@section('titulo')
    Agregar colaborador
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center">
    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
        <form action="{{ route('colaboradores')}}" method="POST" novalidate>
            @csrf
            <div class="mb-5">
                <label for="nombrecolaborador" class="mb-2 block uppercase text-gray-500 font-bold">
                Ingresa el nombre del colaborador:
                </label>
                <input 
                    id="nombrecolaborador"
                    name="nombrecolaborador"
                    type="text"
                    placeholder="Nombre del colaborador"
                    class="border p-3 w-full rounded-lg"
                />
            </div>

            <div class="mb-5">
                <label for="apellidocolaborador" class="mb-2 block uppercase text-gray-500 font-bold">
                Ingresa el apellido del colaborador:
                </label>
                <input 
                    id="apellidocolaborador"
                    name="apellidocolaborador"
                    type="text"
                    placeholder="Apellido del colaborador"
                    class="border p-3 w-full rounded-lg"
                />

            </div>

            <div class="mb-5">
                <label for="usernamecolaborador" class="mb-2 block uppercase text-gray-500 font-bold">
                Ingresa el username:
                </label>
                <input
                    id="usernamecolaborador"
                    name="usernamecolaborador"
                    type="text" 
                    placeholder="Username colaborador" 
                    class="border p-3 w-full rounded-lg"
                />
            </div>

            <div class="mb-5">
                <label for="passwordcolaborador" class="mb-2 block uppercase text-gray-500 font-bold">
                Password:
                </label>
                <input 
                    id="passwordcolaborador"
                    name="passwordcolaborador"
                    type="text"
                    placeholder="Password"
                    class="border p-3 w-full rounded-lg "
                />
            </div>

            <div class="mb-5">
                <label for="idcolaborador" class="mb-2 block uppercase text-gray-500 font-bold">
                ID colaborador:
                </label>
                <input 
                    id="idcolaborador"
                    name="idcolaborador"
                    type="text"
                    placeholder="id colaborador"
                    class="border p-3 w-full rounded-lg"
                />
            </div>

            <div class="mb-5">
                <label for="joindatecolaborador" class="mb-2 block uppercase text-gray-500 font-bold">
                Fecha de ingreso:
                </label>
                <input 
                    id="joindatecolaborador"
                    name="joindatecolaborador"
                    type="text"
                    placeholder="dd-mm-yyyy"
                    class="border p-3 w-full rounded-lg"
                />
            </div>

            <div class="mb-5">
                <label for="telefonocolaborador" class="mb-2 block uppercase text-gray-500 font-bold">
                Telefono:
                </label>
                <input 
                    id="telefonocolaborador"
                    name="telefonocolaborador"
                    type="text"
                    placeholder="XXX-XXX-XXXX"
                    class="border p-3 w-full rounded-lg"
                />
            </div>

            <div class="mb-5">
                <label for="companiacolaborador" class="mb-2 block uppercase text-gray-500 font-bold">
                Compania a la que pertenece:
                </label>
                <input 
                    id="companiacolaborador"
                    name="companiacolaborador"
                    type="text"
                    placeholder="Nombre de la compania"
                    class="border p-3 w-full rounded-lg"
                />
            </div>

            <div class="mb-5">
                <label for="departamentocolaborador" class="mb-2 block uppercase text-gray-500 font-bold">
                Departamento al que pertenece:
                </label>
                <input 
                    id="departamentocolaborador"
                    name="departamentocolaborador"
                    type="text"
                    placeholder="Nombre del departamento"
                    class="border p-3 w-full rounded-lg"
                />
            </div>

            <div class="mb-5">
                <label for="designacioncolaborador" class="mb-2 block uppercase text-gray-500 font-bold">
                Puesto:
                </label>
                <input 
                    id="designacioncolaborador"
                    name="designacioncolaborador"
                    type="text"
                    placeholder="Puesto"
                    class="border p-3 w-full rounded-lg"
                />
            </div>
            <!--Empieza la tabla-->
            <table class="table-auto mb-5">
                <!--Encabezado de la tabla-->
                <thead>
                    <tr>
                        <td class="">Modulo de permisos</th>
                        <th class="text-center p-2">Read</th>
                        <th class="text-center p-2">Write</th>
                        <th class="text-center p-2">Create</th>
                        <th class="text-center p-2">Delete</th>
                        <th class="text-center p-2">Import</th>
                        <th class="text-center p-2">Export</th>
                    </td>
                </thead>
                <!--Termina encabezado-->
                <!--Cuerpo de la tabla-->
                <tbody>
                    <tr>
                        <td>Holidays</td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                    </tr>
                    <tr>
                        <td>Clientes</td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                    </tr>
                    <tr>
                        <td>Proyectos</td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                    </tr>
                    <tr>
                        <td>Tareas</td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                    </tr>
                    <tr>
                        <td>Chats</td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                    </tr>
                    <tr>
                        <td>Assets</td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                    </tr>
                    <tr>
                        <td>Timing Sheets</td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                        <td class="text-center p-2">
                            <input type="checkbox">
                        </td>
                    </tr>
                </tbody>
                <!--Termina cuerpo de la tabla-->
            </table>
            <input
                type="submit"
                value="Agregar colaborador"
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
            />
        </form>
    </div>
</div>
@endsection
