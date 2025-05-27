<div>
    @extends('base')
    @section('titulo', 'Formulario Obra')
    @section('contenido')
    <h3 class="titulo">Formulario Obra</h3>
    <div class="form mb-3 formulario col-2 mx-auto">
        @if (empty($obra))
            <form action="{{route('crearObra')}}" method="post">
        @else
            <form action="{{route('editarObra', $obra->id)}}" method="post">
        @endif
            @csrf
            {{-- con ?? '' le indico que si no existe lo tome como un string vacío --}}
            <input class="form-control" type="hidden" name="id" value="{{$obra->id ?? ''}}">
            <label class="form-label" for="titulo">Título</label>
            <input class="form-control" type="text" name="titulo" id="titulo" value="{{$obra->titulo ?? ''}}">
            
            <label class="form-label" for="id_tipo">Tipo</label>            
            <select name="id_tipo" id="id_tipo" class="form-control">
                @if (empty($obra))
                    <option value="opcion" selected>---- Elija una opción ----</option>
                    <@foreach($tipos as $tipo)
                    <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                @endforeach
                @else
                    <@foreach($tipos as $tipo)
                    <option value="{{ $tipo->id }}" {{$tipo->id == $obra->tipo->id ? 'selected' : '' }}>
                        {{ $tipo->nombre }}
                    </option>
                    @endforeach  
                @endif  
            </select>
            
            <label class="form-label" for="anyo_publicacion">Año de publicación</label>
            <input class="form-control" type="text" name="anyo_publicacion" id="anyo_publicacion" value="{{$obra->anyo_publicacion ?? ''}}">
            
            <label class="form-label" for="id_idioma">Idioma</label>            
            <select name="id_idioma" id="id_idioma" class="form-control">
                @if (empty($obra))
                    <option value="opcion" selected>---- Elija una opción ----</option>
                    <@foreach($idiomas as $idioma)
                    <option value="{{ $idioma->id }}">{{ $idioma->nombre }}</option>
                @endforeach
                @else
                    <@foreach($idiomas as $idioma)
                    <option value="{{ $idioma->id }}" {{$idioma->id == $obra->idioma->id ? 'selected' : '' }}>
                        {{ $idioma->nombre }}
                    </option>
                    @endforeach  
                @endif  
            </select>

            <label class="form-label" for="id_idioma">Editorial</label>            
            <select name="id_editorial" id="id_editorial" class="form-control">
                @if (empty($obra))
                    <option value="opcion" selected>---- Elija una opción ----</option>
                    <@foreach($editoriales as $editorial)
                    <option value="{{ $editorial->id }}">{{ $editorial->nombre }}</option>
                @endforeach
                @else
                    <@foreach($editoriales as $editorial)
                    <option value="{{ $editorial->id }}" {{$editorial->id == $obra->editorial->id ? 'selected' : '' }}>
                        {{ $editorial->nombre }}
                    </option>
                    @endforeach  
                @endif  
            </select>

            <label class="form-label" for="edicion">Edición</label>
            <input class="form-control" type="text" name="edicion" id="edicion" value="{{$obra->edicion ?? ''}}">

            <button class="btn btn-primary my-3" type="submit">Enviar</button>
        </form>
    </div>
    @endsection
</div>
