<div>
     @extends('base')
    @section('titulo', 'Obras escritas por Autores')
    @section('contenido')
        <h1 class="titulo">Obras escritas por Autores</h1>
        <div class="tabla" >
            <div>
                <a href="{{route('crearObrasAutores')}}" class="btn btn-success botonInsertar">Insertar</a>
            </div>
            <table class="tObrasAutor table table-striped table-hover" id="tObrasAutor">
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Obra</th>
                    <th>Autor</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($obrasAutores as $obraAutor)
                    <tr>
                        <td>{{$obraAutor->id}}</td>
                        <td>{{$obraAutor->obra->titulo}}</td>
                        <td>{{$obraAutor->autor->nombre}} {{$obraAutor->autor->apellidos}}</td>
                        <td><a href="{{route('formularioObrasAutoresEd', $obraAutor->id)}}" class='btn btn-secondary'><i class='fa-regular fa-pen-to-square'></i></a></td>
                        <td>
                            <form action="{{route('eliminarObraAutor', $obraAutor->id)}}" method="POST">
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
            var tabla = new DataTable('#tObrasAutor');
        </script>
    @endsection   
</div>
