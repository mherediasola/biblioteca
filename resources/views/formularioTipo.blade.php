<div>
    @extends('base')
    @section('titulo', 'Formulario Tipo')
    @section('contenido')
    <h3 class="titulo">Formulario Tipo</h3>
    <div class="form mb-3 formulario col-2 mx-auto">
        @if (empty($tipo))
            <form action="{{route('crearTipo')}}" method="post">
        @else
            <form action="{{route('editarTipo', $tipo->id)}}" method="post">
        @endif
            @csrf
            {{-- con ?? '' le indico que si no existe lo tome como un string vacío --}}
            <input class="form-control" type="hidden" name="id" value="{{$tipo->id ?? ''}}">
            <label class="form-label" for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre" value="{{$tipo->nombre ?? ''}}">
            <button class="btn btn-primary my-3" type="submit">Enviar</button>
        </form>
    </div>
    @endsection
</div>
