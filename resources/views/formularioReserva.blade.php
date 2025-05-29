<div>
    @extends('base')
    @section('titulo', 'Formulario Reserva')
    @section('contenido')
    <h3 class="titulo">Formulario Reserva</h3>
    <div class="form mb-3 formulario col-2 mx-auto">
        @if (empty($reserva))
            <form action="{{route('crearReservas')}}" method="post">
        @else
            <form action="{{route('editarReserva', $prestamo->id)}}" method="post">
        @endif
            @csrf
            {{-- con ?? '' le indico que si no existe lo tome como un string vacío --}}
            <input class="form-control" type="hidden" name="id" value="{{$reserva->id ?? ''}}">
            <label class="form-label" for="id_usuario">Usuario</label>
            <select name="id_usuario" id="id_usuario" class="form-control">
                @if (empty($reserva))
                    <option value="opcion" selected>---- Elija una opción ----</option>
                    <@foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}">{{ $usuario->name }} {{ $usuario->apellidos }}</option>
                @endforeach
                @else
                    <@foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}" {{$usuario->id == $reserva->user->id ? 'selected' : '' }}>
                        {{ $usuario->name }} {{ $usuario->apellidos }}
                    </option>
                    @endforeach  
                @endif  
            </select>
            <label class="form-label" for="id_mesa">Mesa</label>
            <select name="id_mesa" id="id_mesa" class="form-control">
                @if (empty($reserva))
                    <option value="" selected disabled>---- Elija una opción ----</option>
                    <@foreach($mesas as $mesa)
                    <option value="{{ $mesa->id }}">{{ $mesa->id }} - {{ $mesa->sala->nombre }} </option>
                    @endforeach
                @else
                    <@foreach($mesas as $mesa)
                    <option value="{{ $mesa->id }}" {{$mesa->id == $reserva->mesa->id ? 'selected' : '' }}>
                        {{ $mesa->id }} - {{ $mesa->sala->nombre }}
                    </option>
                    @endforeach  
                @endif  
            </select>           
            <label class="form-label" for="fecha">Fecha</label>
            <input class="form-control" type="date" name="fecha" id="fecha" value="{{$reserva->fecha ?? ''}}">
            <label class="form-label" for="hora_inicio">Hora de inicio</label>
            <input class="form-control" type="time" name="hora_inicio" id="hora_inicio" value="{{$reserva->hora_inicio ?? ''}}">
            <label class="form-label" for="hora_final">Hora final</label>
            <input class="form-control" type="time" name="hora_final" id="hora_final" value="{{$reserva->hora_final ?? ''}}">
            <button class="btn btn-primary my-3" type="submit">Enviar</button>
        </form>
    </div>
    @endsection
</div>
