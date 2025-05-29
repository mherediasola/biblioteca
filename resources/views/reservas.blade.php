<div>
    @extends('base')
    @section('titulo', 'Reservas')
    @section('contenido')
        <h1 class="titulo">Reservas</h1>
        <div class="tabla" >
            <div>
                <a href="{{route('crearReservas')}}" class="btn btn-success botonInsertar">Insertar</a>
            </div>
            <table class="tReserva table table-striped table-hover" id="tReserva">
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Usuario</th>
                    <th>Sala</th>
                    <th>Mesa</th>
                    <th>Pc</th>
                    <th>Fecha</th>
                    <th>Hora inicio</th>
                    <th>Hora final</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($reservas as $reserva)
                    <tr>
                        <td>{{$reserva->id}}</td>
                        <td>{{$reserva->user->name}} {{$reserva->user->apellidos}}</td>
                        <td>{{$reserva->mesa->sala->nombre}}</td>
                        <td>{{$reserva->mesa->id}}</td>
                        <td>
                            {{-- si es 1 es verdadero, si es no es falso --}}
                            {!! $reserva->mesa->pc == 1 ? 'Sí' : 'No' !!} 
                        </td>
                        <td>{{$reserva->fecha}}</td>
                        <td>{{$reserva->hora_inicio}}</td>
                        <td>{{$reserva->hora_final}}</td>
                        <td><a href="{{route('formularioReservasEd', $reserva->id)}}" class='btn btn-secondary'><i class='fa-regular fa-pen-to-square'></i></a></td>
                        <td>
                            <form action="{{route('eliminarReserva', $reserva->id)}}" method="POST">
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
            var tabla = new DataTable('#tReserva');
        </script>
    @endsection  
</div>
