<div>
    @extends('base')
    @section('titulo', 'Editoriales')
    @section('contenido')
        <h1 class="titulo">Editoriales</h1>
        <div class="tabla" >
            <div>
                <a href="{{route('crearEditorial')}}" class="btn btn-success botonInsertar">Insertar</a>
            </div>
            <table class="tEditoriales table table-striped table-hover" id="tEditoriales">
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($editoriales as $editorial)
                    <tr>
                        <td>{{$editorial->id}}</td>
                        <td>{{$editorial->nombre}}</td>
                        <td><a href="{{route('formularioEditorialesEd', $editorial->id)}}" class='btn btn-secondary'><i class='fa-regular fa-pen-to-square'></i></a></td>
                        <td>
                            <form action="{{route('eliminarEditorial', $editorial->id)}}" method="POST">
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
            var tabla = new DataTable('#tEditoriales');
        </script>
    @endsection
</div>
