<div>
    @extends('base')
    @section('titulo', 'Formulario Pais')
    @section('contenido')
    <h3 class="titulo">Formulario Pais</h3>
    <div class="form mb-3 formulario col-2 mx-auto">
        @if (empty($pais))
            <form action="{{route('crearPais')}}" method="post">
        @else
            <form action="{{route('editarPais', $pais->id)}}" method="post">
        @endif
            @csrf
            {{-- con ?? '' le indico que si no existe lo tome como un string vacío --}}
            <input class="form-control" type="hidden" name="id" value="{{$pais->id ?? ''}}">
            <label class="form-label" for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre" value="{{$pais->nombre ?? ''}}">
            <label class="form-label" for="continente">Continente</label>
            <select name="continente" id="contienente" class="form-control">
                @if (empty($pais))
                {{-- Crear un enum con los continentes y usar un for-each para recorrerlos. Ejemplo
                en el otro proyecto >>> biblioteca unidad 6 carpeta DWES --}}
                    <option value="opcion">---- Elija una opción ----</option>
                    <option value="africa" class="form-control">África</option>
                    <option value="america" class="form-control">América</option>
                    <option value="Asia" class="form-control">Asia</option>
                    <option value="Antártida" class="form-control">Antártida</option>
                    <option value="europa" class="form-control">Europa</option>
                    <option value="oceania" class="form-control">Oceanía</option>
                @else
                    <option value="{{$pais->continente ?? ''}}" selected>{{$pais->continente ?? ''}}</option>
                    <option value="africa" class="form-control">África</option>
                    <option value="america" class="form-control">América</option>
                    <option value="Asia" class="form-control">Asia</option>
                    <option value="Antártida" class="form-control">Antártida</option>
                    <option value="europa" class="form-control">Europa</option>
                    <option value="oceania" class="form-control">Oceanía</option>
                @endif    
            </select>
            <button class="btn btn-primary my-3" type="submit">Enviar</button>
        </form>
    </div>
    @endsection
</div>
