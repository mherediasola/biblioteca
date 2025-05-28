<div>
    @extends('base')
    @section('titulo', 'Formulario Préstamo')
    @section('contenido')
    <h3 class="titulo">Formulario Préstamo</h3>
    <div class="form mb-3 formulario col-2 mx-auto">
        @if (empty($prestamo))
            <form action="{{route('crearPrestamo')}}" method="post">
        @else
            <form action="{{route('editarPrestamo', $prestamo->id)}}" method="post">
        @endif
            @csrf
            {{-- con ?? '' le indico que si no existe lo tome como un string vacío --}}
            <input class="form-control" type="hidden" name="id" value="{{$prestamo->id ?? ''}}">
            <label class="form-label" for="id_usuario">Usuario</label>
            <select name="id_usuario" id="id_usuario" class="form-control">
                @if (empty($prestamo))
                    <option value="opcion" selected>---- Elija una opción ----</option>
                    <@foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}">{{ $usuario->name }} {{ $usuario->apellidos }}</option>
                @endforeach
                @else
                    <@foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}" {{$usuario->id == $prestamo->user->id ? 'selected' : '' }}>
                        {{ $usuario->name }} {{ $usuario->apellidos }}
                    </option>
                    @endforeach  
                @endif  
            </select>
            <label class="form-label" for="pc">Estado-activo</label>
            <div>
                <label class="form-label" for="si">Sí</label>
                <input class="form-radio" type="radio" name="estado_activo" id="si" value="1" {{ isset($prestamo) && $prestamo->estado_activo == 1 ? 'checked' : '' }}>
                <label class="form-label" for="no">No</label>
                <input class="form-radio" type="radio" name="estado_activo" id="no" value="0" {{ isset($prestamo) && $prestamo->estado_activo == 0 ? 'checked' : '' }}>
            </div>
            
            <label class="form-label" for="fecha_inicio">Préstamo</label>
            <input class="form-control" type="date" name="fecha_inicio" id="fecha_inicio" value="{{$prestamo->fecha_inicio ?? ''}}">
            <label class="form-label" for="fecha_final">Vencimiento</label>
            <input class="form-control" type="date" name="fecha_final" id="fecha_final" value="{{$prestamo->fecha_final ?? ''}}">
            <button class="btn btn-primary my-3" type="submit">Enviar</button>
        </form>
    </div>
    @endsection
</div>
