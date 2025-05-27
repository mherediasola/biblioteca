<div>
    @extends('base')
    @section('titulo', 'Ejemplares')
    @section('contenido')
        <h1 class="titulo">Ejemplares</h1>
        <div class="tabla" >
            <div>
                <a href="{{route('crearEjemplar')}}" class="btn btn-success botonInsertar">Insertar</a>
            </div>
            <table class="tEjemplar table table-striped table-hover" id="tEjemplar">
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Obra</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($ejemplares as $ejemplar)
                    <tr>
                        <td>{{$ejemplar->id}}</td>
                        <td>{{$ejemplar->obra->titulo}}</td>
                        <td><a href="{{route('formularioEjemplaresEd', $ejemplar->id)}}" class='btn btn-secondary'><i class='fa-regular fa-pen-to-square'></i></a></td>
                        <td>
                            <form action="{{route('eliminarEjemplar', $ejemplar->id)}}" method="POST">
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
            var tabla = new DataTable('#tEjemplar');
        </script>
    @endsection  
</div>
