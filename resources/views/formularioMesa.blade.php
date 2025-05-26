<div>
    @extends('base')
    @section('titulo', 'Formulario Mesa')
    @section('contenido')
    <h3 class="titulo">Formulario Mesa</h3>
    <div class="form mb-3 formulario col-2 mx-auto">
        @if (empty($mesa))
            <form action="{{route('crearMesa')}}" method="post">
        @else
            <form action="{{route('editarMesa', $mesa->id)}}" method="post">
        @endif
            @csrf
            {{-- con ?? '' le indico que si no existe lo tome como un string vacío --}}
            <input class="form-control" type="hidden" name="id" value="{{$mesa->id ?? ''}}">
            <label class="form-label" for="id_sala">Sala</label>
            <select name="id_sala" id="id_sala" class="form-control">
                @if (empty($mesa))
                    <option value="opcion" selected>---- Elija una opción ----</option>
                    <@foreach($salas as $sala)
                    <option value="{{ $sala->id }}">{{ $sala->nombre }}</option>
                @endforeach
                @else
                    <@foreach($salas as $sala)
                    <option value="{{ $sala->id }}" {{$sala->id == $mesa->sala->id ? 'selected' : '' }}>
                        {{ $sala->nombre }}
                    </option>
                    @endforeach  
                @endif  
            </select>
            <label class="form-label" for="pc">Tiene PC</label>
            <div>
                <label class="form-label" for="si">Sí</label>
                <input class="form-radio" type="radio" name="pc" id="si" value="1" {{ isset($mesa) && $mesa->pc == 1 ? 'checked' : '' }}>
                <label class="form-label" for="no">No</label>
                <input class="form-radio" type="radio" name="pc" id="no" value="0" {{ isset($mesa) && $mesa->pc == 0 ? 'checked' : '' }}>
            </div>
            
            <button class="btn btn-primary my-3" type="submit">Enviar</button>
        </form>
    </div>
    @endsection
</div>
