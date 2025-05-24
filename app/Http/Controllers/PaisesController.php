<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;

class PaisesController extends Controller
{
    public function mostrar(){
        $paises = Pais::all();

        return view('paises', ['paises'=> $paises]);
    }

    public function listar(){
         $paises = Pais::all();

        return response()->json([
            'status' => 200,
            'paises' => $paises
        ]);
    }

    public function mostrarFormIns(){
        return view('formularioPais');
    }

    public function insertar(Request $request){
         //para validar los datos que llegan del formulario
        $request->validate([
            'nombre' => ['required', 'string'],
            'continente' => ['required', 'string']
        ]);

        $pais = new Pais();
        $pais->nombre = $request->nombre;
        $pais->continente = $request->continente;
        $pais->save();

        return redirect('/admin/paises');
    }

    public function mostrarFormEd($id){
        $pais = Pais::where('id', $id)->first();

        return view('formularioPais', [
            'pais' => $pais
        ]);

    }

    public function editar($id, Request $request){
        $request->validate([
            'nombre' => ['required', 'string'],
            'continente' => ['required', 'string']
        ]);

        $pais = Pais::where('id', $id)->first();
        $pais->nombre = $request->nombre;
        $pais->continente = $request->continente;
        $pais->save();

        return redirect('/admin/paises');
    }

    public function eliminar($id){
        $pais = Pais::where('id', $id)->first();
        $pais->delete();

        return redirect('/admin/paises');
    }
}
