<div>
    @extends('base')
    @section('titulo', 'Autores')
    @section('contenido')
        <h1 class="titulo">Autores</h1>
        <div class="tabla" >
            <div>
                <a href="{{route('crearAutor')}}" class="btn btn-success botonInsertar">Insertar</a>
            </div>
            <table class="tAutor table table-striped table-hover" id="tAutor">
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>País de origen</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($autores as $autor)
                    <tr>
                        <td>{{$autor->id}}</td>
                        <td>{{$autor->nombre}}</td>
                        <td>{{$autor->apellidos}}</td>
                        <td>{{$autor->pais->nombre}}</td>
                        <td><a href="{{route('formularioAutoresEd', $autor->id)}}" class='btn btn-secondary'><i class='fa-regular fa-pen-to-square'></i></a></td>
                        <td>
                            <form action="{{route('eliminarAutor', $autor->id)}}" method="POST">
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
            var tabla = new DataTable('#tAutor');
        </script>
    @endsection    
</div>
