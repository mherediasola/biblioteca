<div>
    @extends('base')
    @section('titulo', 'Formulario Obra escrita por Autor')
    @section('contenido')
    <h3 class="titulo">Formulario Obra escrita por Autor</h3>
    <div class="form mb-3 formulario col-2 mx-auto">
        @if (empty($obraAutor))
            <form action="{{route('crearObrasAutores')}}" method="post">
        @else
            <form action="{{route('editarObraAutor', $obraAutor->id)}}" method="post">
        @endif
            @csrf
            {{-- con ?? '' le indico que si no existe lo tome como un string vacío --}}
            <input class="form-control" type="hidden" name="id" value="{{$obraAutor->id ?? ''}}">
            <label class="form-label" for="id_obra">Obra</label>
            <select name="id_obra" id="id_obra" class="form-control">
                @if (empty($obraAutor))
                    <option value="opcion" selected>---- Elija una opción ----</option>
                    @foreach($obras as $obra)
                        <option value="{{ $obra->id }}">{{ $obra->titulo }}</option>
                    @endforeach
                @else
                    @foreach($obras as $obra)
                    <option value="{{ $obra->id }}" {{$obra->id == $obraAutor->obra->id ? 'selected' : '' }}>
                        {{ $obra->titulo }}
                    </option>
                    @endforeach  
                @endif  
            </select>

            <label class="form-label" for="id_autor">Autor</label>
            <select name="id_autor" id="id_autor" class="form-control">
                @if (empty($obraAutor))
                    <option value="opcion" selected>---- Elija una opción ----</option>
                    @foreach($autores as $autor)
                    <option value=" {{ $autor->id }} ">{{ $autor->nombre }} {{ $autor->apellidos }}</option>
                @endforeach
                @else
                    @foreach($autores as $autor)
                    <option value="{{ $autor->id }}" {{$autor->id == $obraAutor->autor->id ? 'selected' : '' }}>
                        {{$autor->nombre}} {{$autor->apellidos}}
                    </option>
                    @endforeach  
                @endif  
            </select>
             
            <button class="btn btn-primary my-3" type="submit">Enviar</button>
        </form>
    </div>
    @endsection
</div>
