<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idioma;

class IdiomasController extends Controller
{
    public function mostrar(){
        $idiomas = Idioma::all();

        return view('idiomas', ['idiomas'=> $idiomas]);
    }

    public function listar(){
         $idiomas = Idioma::all();

        return response()->json([
            'status' => 200,
            'idiomas' => $idiomas
        ]);
    }

    public function mostrarFormIns(){
        return view('formularioIdioma');
    }

    public function insertar(Request $request){
         //para validar los datos que llegan del formulario
        $request->validate([
            'nombre' => ['required', 'string']
        ]);

        $idioma = new Idioma();
        $idioma->nombre = $request->nombre;
        $idioma->save();

        return redirect('/admin/idiomas');
    }

    public function mostrarFormEd($id){
        $idioma = Idioma::where('id', $id)->first();

        return view('formularioIdioma', [
            'idioma' => $idioma
        ]);

    }

    public function editar($id, Request $request){
        $request->validate([
            'nombre' => ['required', 'string']
        ]);

        $idioma = Idioma::where('id', $id)->first();
        $idioma->nombre = $request->nombre;
        $idioma->save();

        return redirect('/admin/idiomas');
    }

    public function eliminar($id){
        $idioma = Idioma::where('id', $id)->first();
        $idioma->delete();

        return redirect('/admin/idiomas');
    }
}
