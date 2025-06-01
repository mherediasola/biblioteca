<div>
    @extends('base')
    @section('titulo', 'noPermitido')
    @section('contenido')
        <h1 class="titulo">No tiene acceso a esta página</h1>
        <a href="{{route('login')}}">Iniciar sesión</a>
        <a href="{{route('index')}}">
            <button type="button" class="btn btn-success">Volver a inicio</button>
        </a>
    @endsection
</div>
