<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use Illuminate\Http\Request;
use App\Models\User;

class PrestamosController extends Controller
{
    public function mostrar(){
        $prestamos = Prestamo::all();

        return view('prestamos', ['prestamos'=> $prestamos]);
    }

    public function listar(){
         $prestamos = Prestamo::all();

        return response()->json([
            'status' => 200,
            'prestamos' => $prestamos
        ]);
    }

    public function mostrarFormIns(){
        //$usuarios = User::all();
        //Para obtener solo los usuarios con esos roles
        $usuarios = User::where('id_rol', 3)->orWhere('id_rol', 4)->get();
        return view('formularioPrestamo', [
            'usuarios' => $usuarios             
        ]);
    }

    public function insertar(Request $request){
         //para validar los datos que llegan del formulario
        $request->validate([
            'id_usuario' => ['required', 'integer'],
            'estado_activo' => ['required', 'boolean'],
            'fecha_inicio' => ['required', 'date'],
            'fecha_final' => ['required', 'date']
        ]);

        //id id_usuario estado_activo fecha_inicio fecha_final
        $prestamo = new Prestamo();
        $prestamo->id_usuario = $request->id_usuario;
        $prestamo->estado_activo = $request->estado_activo;
        $prestamo->fecha_inicio = $request->fecha_inicio;
        $prestamo->fecha_final = $request->fecha_final;
        $prestamo->save();

        return redirect('/admin/prestamos');
    }

    public function mostrarFormEd($id){
        $prestamo = Prestamo::where('id', $id)->first();
        $usuarios = User::where('id_rol', 3)->orWhere('id_rol', 4)->get();

        return view('formularioPrestamo', [
            'prestamo' => $prestamo,
            'usuarios' => $usuarios
        ]);

    }

    public function editar($id, Request $request){
        $request->validate([
            'id_usuario' => ['required', 'integer'],
            'estado_activo' => ['required', 'boolean'],
            'fecha_inicio' => ['required', 'date'],
            'fecha_final' => ['required', 'date']
        ]);

        $prestamo = Prestamo::where('id', $id)->first();
        $prestamo->id_usuario = $request->id_usuario;
        $prestamo->estado_activo = $request->estado_activo;
        $prestamo->fecha_inicio = $request->fecha_inicio;
        $prestamo->fecha_final = $request->fecha_final;
        $prestamo->save();

        return redirect('/admin/prestamos');
    }

    public function eliminar($id){
        $prestamo = Prestamo::where('id', $id)->first();
        $prestamo->delete();

        return redirect('/admin/prestamos');
    }
}
