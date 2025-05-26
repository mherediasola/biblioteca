<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use App\Models\Sala;
use Illuminate\Http\Request;

class MesasController extends Controller
{
    public function mostrar(){
        $mesas = Mesa::all();

        return view('mesas', ['mesas'=> $mesas]);
    }

    public function listar(){
         $mesas = Mesa::all();

        return response()->json([
            'status' => 200,
            'mesas' => $mesas
        ]);
    }

    public function mostrarFormIns(){
        $salas = Sala::all();
        return view('formularioMesa', ['salas' => $salas]);
    }

    public function insertar(Request $request){
         //para validar los datos que llegan del formulario
        $request->validate([
            'id_sala' => ['required', 'integer'],
            'pc' => ['required', 'boolean']
        ]);
        //id id_sala pc
        $mesa = new Mesa();
        $mesa->id_sala = $request->id_sala;
        $mesa->pc = $request->pc;
        $mesa->save();

        return redirect('/admin/mesas');
    }

    public function mostrarFormEd($id){
        $mesa = Mesa::where('id', $id)->first();
        $salas = Sala::all();

        return view('formularioMesa', [
            'mesa' => $mesa,
            'salas' => $salas
        ]);

    }

    public function editar($id, Request $request){
        $request->validate([
            'id_sala' => ['required', 'integer'],
            'pc' => ['required', 'boolean']
        ]);

        $mesa = Mesa::where('id', $id)->first();
        $mesa->id_sala = $request->id_sala;
        $mesa->pc = $request->pc;
        $mesa->save();

        return redirect('/admin/mesas');
    }

    public function eliminar($id){
        $mesa = Mesa::where('id', $id)->first();
        $mesa->delete();

        return redirect('/admin/mesas');
    }
}
