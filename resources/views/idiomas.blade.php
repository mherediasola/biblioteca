<div>
    @extends('base')
    @section('titulo', 'Idiomas')
    @section('contenido')
        <h1 class="titulo">Idiomas</h1>
        <div class="tabla" >
            <div>
                <a href="{{route('crearIdioma')}}" class="btn btn-success botonInsertar">Insertar</a>
            </div>
            <table class="tIdiomas table table-striped table-hover" id="tIdiomas">
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($idiomas as $idioma)
                    <tr>
                        <td>{{$idioma->id}}</td>
                        <td>{{$idioma->nombre}}</td>
                        <td><a href="{{route('formularioIdiomasEd', $idioma->id)}}" class='btn btn-secondary'><i class='fa-regular fa-pen-to-square'></i></a></td>
                        <td>
                            <form action="{{route('eliminarIdioma', $idioma->id)}}" method="POST">
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
            var tabla = new DataTable('#tIdiomas');
        </script>
    @endsection
</div>
