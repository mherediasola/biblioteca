<div>
    @extends('base')
    @section('titulo', 'Formulario Editorial')
    @section('contenido')
    <h3 class="titulo">Formulario Editorial</h3>
    <div class="form mb-3 formulario col-2 mx-auto">
        @if (empty($editorial))
            <form action="{{route('crearEditorial')}}" method="post">
        @else
            <form action="{{route('editarEditorial', $editorial->id)}}" method="post">
        @endif
            @csrf
            {{-- con ?? '' le indico que si no existe lo tome como un string vacío --}}
            <input class="form-control" type="hidden" name="id" value="{{$editorial->id ?? ''}}">
            <label class="form-label" for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre" value="{{$editorial->nombre ?? ''}}">
            <button class="btn btn-primary my-3" type="submit">Enviar</button>
        </form>
    </div>
    @endsection
</div>
