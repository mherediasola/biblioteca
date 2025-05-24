<div>
    @extends('base')
    @section('titulo', 'Formulario Idioma')
    @section('contenido')
    <h3 class="titulo">Formulario Idioma</h3>
    <div class="form mb-3 formulario col-2 mx-auto">
        @if (empty($idioma))
            <form action="{{route('crearIdioma')}}" method="post">
        @else
            <form action="{{route('editarIdioma', $idioma->id)}}" method="post">
        @endif
            @csrf
            {{-- con ?? '' le indico que si no existe lo tome como un string vacío --}}
            <input class="form-control" type="hidden" name="id" value="{{$idioma->id ?? ''}}">
            <label class="form-label" for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre" value="{{$idioma->nombre ?? ''}}">
            <button class="btn btn-primary my-3" type="submit">Enviar</button>
        </form>
    </div>
    @endsection
</div>
