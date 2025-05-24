<div>
    @extends('base')
    @section('titulo', 'Paises')
    @section('contenido')
        <h1 class="titulo">Paises</h1>
        <div class="tabla" >
            <div>
                <a href="{{route('crearPais')}}" class="btn btn-success botonInsertar">Insertar</a>
            </div>
            <table class="tPais table table-striped table-hover" id="tPais">
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Continente</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($paises as $pais)
                    <tr>
                        <td>{{$pais->id}}</td>
                        <td>{{$pais->nombre}}</td>
                        <td>{{$pais->continente}}</td>
                        <td><a href="{{route('formularioPaisesEd', $pais->id)}}" class='btn btn-secondary'><i class='fa-regular fa-pen-to-square'></i></a></td>
                        <td>
                            <form action="{{route('eliminarPais', $pais->id)}}" method="POST">
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
            var tabla = new DataTable('#tPais');
        </script>
    @endsection    
</div>
