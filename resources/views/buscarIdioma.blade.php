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
                    <tr>
                        <td>{{$idioma->id}}</td>
                        <td>{{$idioma->nombre}}</td>
                        <td><a href="{{route('formularioIdiomasEd', $idioma->id)}}" class='btn btn-secondary'><i class='fa-regular fa-pen-to-square'></i></a></td>
                        <td><a href='{{route('eliminarIdioma', $idioma->id)}}' class='btn btn-danger'><i class='fa-solid fa-trash'></i></a></td>
                    </tr> 
                </tbody>
            </table>
        </div>
        <script>
            var tabla = new DataTable('#tIdiomas');
        </script>
    @endsection
</div>
