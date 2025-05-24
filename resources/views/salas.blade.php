<div>
    @extends('base')
    @section('titulo', 'Salas')
    @section('contenido')
        <h1 class="titulo">Salas</h1>
        <div class="tabla" >
            <div>
                <a href="{{route('crearSala')}}" class="btn btn-success botonInsertar">Insertar</a>
            </div>
            <table class="tSalas table table-striped table-hover" id="tSalas">
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($salas as $sala)
                    <tr>
                        <td>{{$sala->id}}</td>
                        <td>{{$sala->nombre}}</td>
                        <td><a href="{{route('formularioSalasEd', $sala->id)}}" class='btn btn-secondary'><i class='fa-regular fa-pen-to-square'></i></a></td>
                        <td>
                            <form action="{{route('eliminarSala', $sala->id)}}" method="POST">
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
            var tabla = new DataTable('#tSalas');
        </script>
    @endsection
</div>
