<div>
    @extends('base')
    @section('titulo', 'Formulario Usuario')
    @section('contenido')
    <h3 class="titulo">Formulario Usuario</h3>
    <div class="form mb-3 formulario col-2 mx-auto">
        @if (empty($usuario))
            <form action="{{route('crearUsuario')}}" method="post">
        @else
            <form action="{{route('editarUsuario', $usuario->id)}}" method="post">
        @endif
            @csrf
            {{-- con ?? '' le indico que si no existe lo tome como un string vacío --}}
            <input class="form-control" type="hidden" name="id" value="{{$usuario->id ?? ''}}">
            <label class="form-label" for="id_rol">Rol</label>
            <select name="id_rol" id="id_rol" class="form-control">
                @if (empty($usuario))
                    <option value="opcion" selected>---- Elija una opción ----</option>
                    <@foreach($roles as $rol)
                    <option value="{{ $rol->id }}">{{ $rol->tipo }}</option>
                @endforeach
                @else
                    <@foreach($roles as $rol)
                    <option value="{{ $rol->id }}" {{$rol->id == $usuario->role->id ? 'selected' : '' }}>
                        {{ $rol->tipo }}
                    </option>
                    @endforeach  
                @endif  
            </select>
            <label class="form-label" for="name">Nombre</label>
            <input class="form-control" type="text" name="name" id="name" value="{{$usuario->name ?? ''}}">
            <label class="form-label" for="apellidos">Apellidos</label>
            <input class="form-control" type="text" name="apellidos" id="apellidos" value="{{$usuario->apellidos ?? ''}}">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="text" name="email" id="email" value="{{$usuario->email ?? ''}}">
            <label class="form-label" for="password">Contraseña</label>
            <input class="form-control" type="password" name="password" id="password" value="{{$usuario->password ?? ''}}">
            
            <button class="btn btn-primary my-3" type="submit">Enviar</button>
        </form>
    </div>
    @endsection
</div>
