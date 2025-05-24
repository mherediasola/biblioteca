<div>
    @extends('base')
    @section('titulo', 'Formulario Sala')
    @section('contenido')
    <h3 class="titulo">Formulario Sala</h3>
    <div class="form mb-3 formulario col-2 mx-auto">
        @if (empty($sala))
            <form action="{{route('crearSala')}}" method="post">
        @else
            <form action="{{route('editarSala', $sala->id)}}" method="post">
        @endif
            @csrf
            {{-- con ?? '' le indico que si no existe lo tome como un string vacío --}}
            <input class="form-control" type="hidden" name="id" value="{{$sala->id ?? ''}}">
            <label class="form-label" for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre" value="{{$sala->nombre ?? ''}}">
            <button class="btn btn-primary my-3" type="submit">Enviar</button>
        </form>
    </div>
    @endsection
</div>
