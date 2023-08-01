@extends("layouts.app")

@section('titulo')
    Dashboard Empleado
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

        <div class="grid grid-rows-3 grid-flow-col gap-4 bg-slate-400 shadow-2xl shadow-slate-400 rounded-md container mx-auto px-4">
            
            <div class="row-start-1 row-end-4 bg-slate-200 shadow-xl shadow-slate-200 font-bold text-xl mb-10 " style="text-align:center;">
                <p>Primer Grafica</p>
                <canvas id="ingresos" class="w-1000 h-1000 md:w-full md:h-50 lg:w-full lg:h-full"></canvas>
            </div>
            <div></div>
            <div class="row-start-1 row-end-4 bg-slate-200 shadow-xl shadow-slate-200 font-bold text-xl mb-10 " style="text-align:center;">
                Segunda grafica
                <canvas id="proyectosT" class="w-100 h-100 md:w-full md:h-50 lg:w-full lg:h-full"></canvas>
            </div>


            <script>
                // Datos de ejemplo para el gráfico
                const data = {
                    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                    datasets: [{
                    label: 'Ingresos',
                    data: [1009, 2002, 1500, 4000, 7000],
                    backgroundColor: 'rgba(59, 130, 246, 0.7)',
                    borderColor: 'rgba(59, 130, 246, 1)',
                    borderWidth: 1,
                    }]
                };
                const data2 = {
                    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                    datasets: [{
                    label: 'Proyectos Terminados',
                    data: [10, 15, 5, 4, 20],
                    backgroundColor: 'rgba(59, 130, 246, 0.7)',
                    borderColor: 'rgba(59, 130, 246, 1)',
                    borderWidth: 1,
                    }]
                };
                // Opciones del gráfico
                const options = {
                    responsive: false,
                    maintainAspectRatio: true,
                    scales: {
                    y: {
                        beginAtZero: true
                    }
                    }
                };
                const options2 = {
                    responsive: false,
                    maintainAspectRatio: true,
                    scales: {
                    y: {
                        beginAtZero: true
                    }
                    }
                };
                // Crear la instancia del gráfico
                const ctx = document.getElementById('ingresos').getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: data,
                    options: options
                });
                const ctx2 = document.getElementById('proyectosT').getContext('2d');
                new Chart(ctx2, {
                    type: 'bar',
                    data: data2,
                    options: options2
                });
            </script>
        </div>
        <div class="grid grid-cols-4 grid-flow-cols gap-4 bg-slate-400 shadow-2xl shadow-slate-400 rounded-md container mx-auto px-10">
            <div class="bg-slate-200 shadow-xl shadow-slate-200 font-bold text-xl mb-10 col-span-2 rounded-md container mx-auto px-40">
                <div class="container mx-auto">
                    <p>Proyectos en proceso</p>
                </div>
            </div>
            <div class="bg-slate-200 shadow-xl shadow-slate-200 font-bold text-xl mb-10 col-span-2 rounded-md container mx-auto px-40">
                <div>
                    <p>Proyectos Pendientes</p>
                </div>
            </div>
        </div>
    </div>
@endsection