<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ejemplar;
use App\Models\Obra;

class EjemplaresController extends Controller
{
    public function mostrar(){
        $ejemplares = Ejemplar::all();

        return view('ejemplares', ['ejemplares'=> $ejemplares,
        ]);
    }

    public function listar(){
         $ejemplares = Ejemplar::all();

        return response()->json([
            'status' => 200,
            'ejemplares' => $ejemplares
        ]);
    }

    public function mostrarFormIns(){
        $obras = Obra::all();
        return view('formularioEjemplar', ['obras' => $obras]);
    }

    public function insertar(Request $request){
         //para validar los datos que llegan del formulario
        $request->validate([
            'id_obra' => ['required', 'integer']

        ]);
        //id id_obra
        $ejemplar = new Ejemplar();
        $ejemplar->id_obra = $request->id_obra;
        $ejemplar->save();

        return redirect('/admin/ejemplares');
    }

    public function mostrarFormEd($id){
        $ejemplar = Ejemplar::where('id', $id)->first();
        $obras = Obra::all();

        return view('formularioEjemplar', [
            'ejemplar' => $ejemplar,
            'obras' => $obras
        ]);

    }

    public function editar($id, Request $request){
        $request->validate([
            'id_obra' => ['required', 'integer']

        ]);

        $ejemplar = Ejemplar::where('id', $id)->first();
        $ejemplar->id_obra = $request->id_obra;
        $ejemplar->save();

        return redirect('/admin/ejemplares');
    }

    public function eliminar($id){
        $ejemplar = Ejemplar::where('id', $id)->first();
        $ejemplar->delete();

        return redirect('/admin/ejemplares');
    }
}
