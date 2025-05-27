<?php

namespace App\Http\Controllers;

use App\Models\Obra;
use App\Models\Tipo;
use App\Models\Idioma;
use App\Models\Editorial;

use Illuminate\Http\Request;

class ObrasController extends Controller
{
    public function mostrar(){
        $obras = Obra::all();

        return view('obras', ['obras'=> $obras]);
    }

    public function listar(){
         $obras = Obra::all();

        return response()->json([
            'status' => 200,
            'obras' => $obras
        ]);
    }

    public function mostrarFormIns(){
        $tipos = Tipo::all();
        $idiomas = Idioma::all();
        $editoriales = Editorial::all();

        return view('formularioObra', [
            'tipos' => $tipos,
            'idiomas' => $idiomas,
            'editoriales' => $editoriales              
        ]);
    }

    public function insertar(Request $request){
         //para validar los datos que llegan del formulario
        $request->validate([
            'titulo' => ['required', 'string'],
            'id_tipo' => ['required', 'string'],
            'anyo_publicacion' => ['required', 'string'],
            'id_idioma' => ['required', 'string'],
            'id_editorial' => ['required', 'string'],
            'edicion' => ['required', 'string']
        ]);

        //id titulo tipo anyo_publicacion idioma editorial edicion
        $obra = new Obra();
        $obra->titulo = $request->titulo;
        $obra->id_tipo = $request->id_tipo;
        $obra->anyo_publicacion = $request->anyo_publicacion;
        $obra->id_idioma = $request->id_idioma;
        $obra->id_editorial = $request->id_editorial;
        $obra->edicion = $request->edicion;
        $obra->save();

        return redirect('/admin/obras');
    }

    public function mostrarFormEd($id){
        $obra = Obra::where('id', $id)->first();
        $tipos = Tipo::all();
        $idiomas = Idioma::all();
        $editoriales = Editorial::all();

        return view('formularioObra', [
            'obra' => $obra,
            'tipos' => $tipos,
            'idiomas' => $idiomas,
            'editoriales' => $editoriales
        ]);

    }

    public function editar($id, Request $request){
        $request->validate([
            'titulo' => ['required', 'string'],
            'id_tipo' => ['required', 'string'],
            'anyo_publicacion' => ['required', 'string'],
            'id_idioma' => ['required', 'string'],
            'id_editorial' => ['required', 'string'],
            'edicion' => ['required', 'string']
        ]);

        $obra = Obra::where('id', $id)->first();
        $obra->titulo = $request->titulo;
        $obra->id_tipo = $request->id_tipo;
        $obra->anyo_publicacion = $request->anyo_publicacion;
        $obra->id_idioma = $request->id_idioma;
        $obra->id_editorial = $request->id_editorial;
        $obra->edicion = $request->edicion;
        $obra->save();

        return redirect('/admin/obras');
    }

    public function eliminar($id){
        $obra = Obra::where('id', $id)->first();
        $obra->delete();

        return redirect('/admin/obras');
    }
}
