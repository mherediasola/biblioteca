<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\Request;

class EditorialesController extends Controller
{
    public function mostrar(){
        $editoriales = Editorial::all();

        return view('editoriales', ['editoriales'=> $editoriales]);
    }

    public function listar(){
         $editoriales = Editorial::all();

        return response()->json([
            'status' => 200,
            'editoriales' => $editoriales
        ]);
    }

    public function mostrarFormIns(){
        return view('formularioEditorial');
    }

    public function insertar(Request $request){
         //para validar los datos que llegan del formulario
        $request->validate([
            'nombre' => ['required', 'string']
        ]);

        $editorial = new Editorial();
        $editorial->nombre = $request->nombre;
        $editorial->save();

        return redirect('/admin/editoriales');
    }

    public function mostrarFormEd($id){
        $editorial = Editorial::where('id', $id)->first();

        return view('formularioEditorial', [
            'editorial' => $editorial
        ]);

    }

    public function editar($id, Request $request){
        $request->validate([
            'nombre' => ['required', 'string']
        ]);

        $editorial = Editorial::where('id', $id)->first();
        $editorial->nombre = $request->nombre;
        $editorial->save();

        return redirect('/admin/editoriales');
    }

    public function eliminar($id){
        $editorial = Editorial::where('id', $id)->first();
        $editorial->delete();

        return redirect('/admin/editoriales');
    }
}
