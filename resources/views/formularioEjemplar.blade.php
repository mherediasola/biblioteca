<div>
    @extends('base')
    @section('titulo', 'Formulario Ejemplar')
    @section('contenido')
    <h3 class="titulo">Formulario Ejemplar</h3>
    <div class="form mb-3 formulario col-2 mx-auto">
        @if (empty($ejemplar))
            <form action="{{route('crearEjemplar')}}" method="post">
        @else
            <form action="{{route('editarEjemplar', $ejemplar->id)}}" method="post">
        @endif
            @csrf
            {{-- con ?? '' le indico que si no existe lo tome como un string vacío --}}
            <input class="form-control" type="hidden" name="id" value="{{$ejemplar->id ?? ''}}">
            <label class="form-label" for="id_obra">Título de la obra</label>
            <select name="id_obra" id="id_obra" class="form-control">
                @if (empty($ejemplar))
                    <option value="opcion" selected>---- Elija una opción ----</option>
                    <@foreach($obras as $obra)
                    <option value="{{ $obra->id }}">{{ $obra->titulo }}</option>
                @endforeach
                @else
                    <@foreach($obras as $obra)
                    <option value="{{ $obra->id }}" {{$obra->id == $ejemplar->obra->id ? 'selected' : '' }}>
                        {{ $obra->titulo }}
                    </option>
                    @endforeach  
                @endif  
            </select>
            
            <button class="btn btn-primary my-3" type="submit">Enviar</button>
        </form>
    </div>
    @endsection
</div>
