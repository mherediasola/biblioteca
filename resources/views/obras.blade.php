<div>
    @extends('base')
    @section('titulo', 'Obras')
    @section('contenido')
        <h1 class="titulo">Obras</h1>
        <div class="tabla" >
            <div>
                <a href="{{route('crearObra')}}" class="btn btn-success botonInsertar">Insertar</a>
            </div>
            <table class="tObra table table-striped table-hover" id="tObra">
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Tipo</th>
                    <th>Año de publicación</th>
                    <th>Idioma</th>
                    <th>Editorial</th>
                    <th>Edición</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($obras as $obra)
                    <tr>
                        <td>{{$obra->id}}</td>
                        <td>{{$obra->titulo}}</td>
                        <td>{{$obra->tipo->nombre}}</td>
                        <td>{{$obra->anyo_publicacion}}</td>
                        <td>{{$obra->idioma->nombre}}</td>
                        <td>{{$obra->editorial->nombre}}</td>
                        <td>{{$obra->edicion}}</td>
                        <td><a href="{{route('formularioObrasEd', $obra->id)}}" class='btn btn-secondary'><i class='fa-regular fa-pen-to-square'></i></a></td>
                        <td>
                            <form action="{{route('eliminarObra', $obra->id)}}" method="POST">
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
            var tabla = new DataTable('#tObra');
        </script>
    @endsection 
</div>
