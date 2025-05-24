<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use Illuminate\Http\Request;

class SalasController extends Controller
{
    public function mostrar(){
        $salas = Sala::all();

        return view('salas', ['salas'=> $salas]);
    }

    public function listar(){
         $salas = Sala::all();

        return response()->json([
            'status' => 200,
            'salas' => $salas
        ]);
    }

    public function mostrarFormIns(){
        return view('formularioSala');
    }

    public function insertar(Request $request){
         //para validar los datos que llegan del formulario
        $request->validate([
            'nombre' => ['required', 'string']
        ]);

        $sala = new Sala();
        $sala->nombre = $request->nombre;
        $sala->save();

        return redirect('/admin/salas');
    }

    public function mostrarFormEd($id){
        $sala = Sala::where('id', $id)->first();

        return view('formularioSala', [
            'sala' => $sala
        ]);

    }

    public function editar($id, Request $request){
        $request->validate([
            'nombre' => ['required', 'string']
        ]);

        $sala = Sala::where('id', $id)->first();
        $sala->nombre = $request->nombre;
        $sala->save();

        return redirect('/admin/salas');
    }

    public function eliminar($id){
        $sala = Sala::where('id', $id)->first();
        $sala->delete();

        return redirect('/admin/salas');
    }
}
