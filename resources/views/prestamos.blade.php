<div>
    @extends('base')
    @section('titulo', 'Prestamos')
    @section('contenido')
        <h1 class="titulo">Préstamos</h1>
        <div class="tabla" >
            <div>
                <a href="{{route('crearPrestamo')}}" class="btn btn-success botonInsertar">Insertar</a>
            </div>
            <table class="tPrestamo table table-striped table-hover" id="tPrestamo">
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Usuario</th>
                    <th>Estado activo</th>
                    <th>Fecha de inicio</th>
                    <th>Fecha final</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($prestamos as $prestamo)
                    <tr>
                        <td>{{$prestamo->id}}</td>
                        <td>{{$prestamo->user->name}} {{$prestamo->user->apellidos}}</td>
                        {{-- si es 1 es verdadero, si es no es falso --}}
                        <td>{!! $prestamo->estado_activo == 1 ? 'Sí' : 'No' !!}</td>   
                        <td>{{$prestamo->fecha_inicio}}</td>
                        <td>{{$prestamo->fecha_final}}</td>
                        <td><a href="{{route('formularioPrestamosEd', $prestamo->id)}}" class='btn btn-secondary'><i class='fa-regular fa-pen-to-square'></i></a></td>
                        <td>
                            <form action="{{route('eliminarPrestamo', $prestamo->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class='fa-solid fa-trash'></i>
                                </button>
                            </form>
                        </td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
        <script>
            var tabla = new DataTable('#tPrestamo');
        </script>
    @endsection    
</div>
