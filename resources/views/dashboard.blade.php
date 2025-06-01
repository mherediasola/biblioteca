@extends('base')
@section('titulo', 'Estadísticas')
@section('contenido')
<div class="container">
    <canvas id="dashboard"></canvas>
</div>

<script>
    const grafica = document.getElementById('dashboard');

    var datos = {!! json_encode($datos) !!}

    console.log(datos);

    new Chart(grafica, {
        type: 'bar',
        data: {
                labels: datos.map(row => row.titulo),
                datasets: [{
                label: 'Número de préstamos / Obra',
                data: datos.map(row => row.total_prestamos),
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
        
    });
</script>

@endsection
