<div>
    @extends('base')
    @section('titulo', 'Mesas')
    @section('contenido')
        <h1 class="titulo">Mesas</h1>
        <div class="tabla" >
            <div>
                <a href="{{route('crearMesa')}}" class="btn btn-success botonInsertar">Insertar</a>
            </div>
            <table class="tMesa table table-striped table-hover" id="tMesa">
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Sala</th>
                    <th>Pc</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($mesas as $mesa)
                    <tr>
                        <td>{{$mesa->id}}</td>
                        <td>{{$mesa->sala->nombre}}</td>
                        <td>
                            {{-- si es 1 es verdadero, si es no es falso --}}
                            {!! $mesa->pc == 1 ? 'Sí' : 'No' !!}
                        </td>
                        <td><a href="{{route('formularioMesasEd', $mesa->id)}}" class='btn btn-secondary'><i class='fa-regular fa-pen-to-square'></i></a></td>
                        <td>
                            <form action="{{route('eliminarMesa', $mesa->id)}}" method="POST">
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
            var tabla = new DataTable('#tMesa');
        </script>
    @endsection    
</div>
