<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\User;
use App\Models\Mesa;

class ReservasController extends Controller
{
    public function mostrar(){
        $reservas = Reserva::all();

        return view('reservas', ['reservas'=> $reservas]);
    }

    public function listar(){
         $reservas = Reserva::all();

        return response()->json([
            'status' => 200,
            'reservas' => $reservas
        ]);
    }

    public function mostrarFormIns(){
        $mesas = Mesa::all();
        //Para obtener solo los usuarios con esos roles
        $usuarios = User::where('id_rol', 3)->orWhere('id_rol', 4)->get();
        return view('formularioReserva', [
            'usuarios' => $usuarios,            
            'mesas' => $mesas         
        ]);
    }

    public function insertar(Request $request){
         //para validar los datos que llegan del formulario
        $request->validate([
            'id_usuario' => ['required', 'integer'],
            'id_mesa' => ['required', 'integer'],
            'fecha' => ['required', 'date'],
            'hora_inicio' => ['required', 'date_format:H:i', 'after:08:00', 'before:21:01'],
            'hora_final' => ['required', 'date_format:H:i', 'after:hora_inicio']
        ]);

        //id id_usuario id_mesa fecha hora_inicio hora_final
        $reserva = new Reserva();
        $reserva->id_usuario = $request->id_usuario;
        $reserva->id_mesa = $request->id_mesa;
        $reserva->fecha = $request->fecha;
        $reserva->hora_inicio = $request->hora_inicio;
        $reserva->hora_final = $request->hora_final;
        $reserva->save();

        return redirect('/admin/reservas');
    }

    public function mostrarFormEd($id){
        $reserva = Reserva::where('id', $id)->first();
        $mesas = Mesa::all();
        $usuarios = User::where('id_rol', 3)->orWhere('id_rol', 4)->get();

        return view('formularioReserva', [
            'reserva' => $reserva,
            'mesas' => $mesas,
            'usuarios' => $usuarios
        ]);

    }

    public function editar($id, Request $request){
        $request->validate([
            'id_usuario' => ['required', 'integer'],
            'id_mesa' => ['required', 'integer'],
            'fecha' => ['required', 'date'],
            'hora_inicio' => ['required', 'time'],
            'hora_final' => ['required', 'time']
        ]);

        $reserva = Reserva::where('id', $id)->first();
        $reserva->id_usuario = $request->id_usuario;
        $reserva->id_mesa = $request->id_mesa;
        $reserva->fecha = $request->fecha;
        $reserva->hora_inicio = $request->hora_inicio;
        $reserva->hora_final = $request->hora_final;
        $reserva->save();

        return redirect('/admin/reservas');
    }

    public function eliminar($id){
        $reserva = Reserva::where('id', $id)->first();
        $reserva->delete();

        return redirect('/admin/reservas');
    }
}
