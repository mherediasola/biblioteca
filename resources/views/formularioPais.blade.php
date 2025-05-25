<div>
    @extends('base')
    @section('titulo', 'Formulario Pais')
    @section('contenido')
    <h3 class="titulo">Formulario Pais</h3>
    <div class="form mb-3 formulario col-2 mx-auto">
        @if (empty($pais))
            <form action="{{route('crearPais')}}" method="post">
        @else
            <form action="{{route('editarPais', $pais->id)}}" method="post">
        @endif
            @csrf
            {{-- con ?? '' le indico que si no existe lo tome como un string vacío --}}
            <input class="form-control" type="hidden" name="id" value="{{$pais->id ?? ''}}">
            <label class="form-label" for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre" value="{{$pais->nombre ?? ''}}">
            <label class="form-label" for="continente">Continente</label>
            <select name="continente" id="contienente" class="form-control">
                @if (empty($pais))
                    <option value="opcion" selected>---- Elija una opción ----</option>
                    <@foreach($continentes as $continente)
                    <option value="{{ $continente->value }}">{{ $continente->name }}</option>
                @endforeach
                @else
                    <@foreach($continentes as $continente)
                    <option value="{{ $continente->value }}" {{$continente->value == $pais->continente ? 'selected' : '' }}>
                        {{ $continente->name }}
                    </option>
                    @endforeach  
                @endif  
                 
            </select>
            <button class="btn btn-primary my-3" type="submit">Enviar</button>
        </form>
    </div>
    @endsection
</div>
