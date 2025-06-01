<div>
    @extends('base')
@section('titulo', 'Iniciar sesión')
@section('contenido')
<h3 class="titulo">Iniciar sesión</h3>
        <div class="form mb-3 formulario col-2 mx-auto">
            <form action="{{route('login')}}" method="post">
                @csrf
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="text" name="email" id="email">

                <label class="form-label" for="password">Contraseña</label>
                <input class="form-control" type="password" name="password" id="password">

                <button class="btn btn-primary my-3" type="submit">Enviar</button>
            </form>
        </div>
@endsection
</div>
