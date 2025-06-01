<div>
    @extends('base')
    @section('titulo', 'Usuarios')
    @section('contenido')
        <h1 class="titulo">Usuarios</h1>
        <div class="tabla" >
            <div>
                <a href="{{route('crearUsuario')}}" class="btn btn-success botonInsertar">Insertar</a>
            </div>
            <table class="tUsuario table table-striped table-hover" id="tUsuario">
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Rol</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{$usuario->id}}</td>
                        <td>{{$usuario->rol->tipo}}</td>
                        <td>{{$usuario->name}} {{$usuario->apellidos}}</td>
                        <td>{{$usuario->email}}</td>
                        <td><a href="{{route('formularioUsuariosEd', $usuario->id)}}" class='btn btn-secondary'><i class='fa-regular fa-pen-to-square'></i></a></td>
                        <td>
                            <form action="{{route('eliminarUsuario', $usuario->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class='fa-solid fa-trash'></i>
                                </button>
                            </form>
                        </td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
        <script>
            var tabla = new DataTable('#tUsuario');
        </script>
    @endsection    
</div>
