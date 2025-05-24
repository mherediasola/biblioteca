<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use Illuminate\Http\Request;

class TiposController extends Controller
{
    public function mostrar(){
        $tipos = Tipo::all();

        return view('tipos', ['tipos'=> $tipos]);
    }

    public function listar(){
         $tipos = Tipo::all();

        return response()->json([
            'status' => 200,
            'tipos' => $tipos
        ]);
    }

    public function mostrarFormIns(){
        return view('formularioTipo');
    }

    public function insertar(Request $request){
         //para validar los datos que llegan del formulario
        $request->validate([
            'nombre' => ['required', 'string']
        ]);

        $tipo = new Tipo();
        $tipo->nombre = $request->nombre;
        $tipo->save();

        return redirect('/admin/tipos');
    }

    public function mostrarFormEd($id){
        $tipo = Tipo::where('id', $id)->first();

        return view('formularioTipo', [
            'tipo' => $tipo
        ]);

    }

    public function editar($id, Request $request){
        $request->validate([
            'nombre' => ['required', 'string']
        ]);

        $tipo = Tipo::where('id', $id)->first();
        $tipo->nombre = $request->nombre;
        $tipo->save();

        return redirect('/admin/tipos');
    }

    public function eliminar($id){
        $tipo = Tipo::where('id', $id)->first();
        $tipo->delete();

        return redirect('/admin/tipos');
    }
}
