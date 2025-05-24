<div>
    @extends('base')
    @section('titulo', 'Tipos')
    @section('contenido')
        <h1 class="titulo">Tipos</h1>
        <div class="tabla" >
            <div>
                <a href="{{route('crearTipo')}}" class="btn btn-success botonInsertar">Insertar</a>
            </div>
            <table class="tTipos table table-striped table-hover" id="tTipos">
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($tipos as $tipo)
                    <tr>
                        <td>{{$tipo->id}}</td>
                        <td>{{$tipo->nombre}}</td>
                        <td><a href="{{route('formularioTiposEd', $tipo->id)}}" class='btn btn-secondary'><i class='fa-regular fa-pen-to-square'></i></a></td>
                        <td>
                            <form action="{{route('eliminarTipo', $tipo->id)}}" method="POST">
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
            var tabla = new DataTable('#tTipos');
        </script>
    @endsection
</div>
