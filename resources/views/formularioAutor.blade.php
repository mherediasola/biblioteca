<div>
    @extends('base')
    @section('titulo', 'Formulario Autor')
    @section('contenido')
    <h3 class="titulo">Formulario Autor</h3>
    <div class="form mb-3 formulario col-2 mx-auto">
        @if (empty($autor))
            <form action="{{route('crearAutor')}}" method="post">
        @else
            <form action="{{route('editarAutor', $autor->id)}}" method="post">
        @endif
            @csrf
            {{-- con ?? '' le indico que si no existe lo tome como un string vacío --}}
            <input class="form-control" type="hidden" name="id" value="{{$autor->id ?? ''}}">
            <label class="form-label" for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre" value="{{$autor->nombre ?? ''}}">
            <label class="form-label" for="apellidos">Apellidos</label>
            <input class="form-control" type="text" name="apellidos" id="apellidos" value="{{$autor->apellidos ?? ''}}">
            <label class="form-label" for="id_pais">País</label>
            <select name="id_pais" id="id_pais" class="form-control">
                @if (empty($autor))
                    <option value="opcion" selected>---- Elija una opción ----</option>
                    <@foreach($paises as $pais)
                    <option value="{{ $pais->id }}">{{ $pais->nombre }}</option>
                @endforeach
                @else
                    <@foreach($paises as $pais)
                    <option value="{{ $pais->id }}" {{$pais->id == $autor->pais->id ? 'selected' : '' }}>
                        {{ $pais->nombre }}
                    </option>
                    @endforeach  
                @endif  
            </select>
            
            <button class="btn btn-primary my-3" type="submit">Enviar</button>
        </form>
    </div>
    @endsection
</div>
