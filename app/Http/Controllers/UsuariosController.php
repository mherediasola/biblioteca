<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Rol;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function mostrar(){
        $usuarios = User::all();

        return view('usuarios', ['usuarios'=> $usuarios]);
    }

    public function listar(){
         $usuarios = User::all();

        return response()->json([
            'status' => 200,
            'usuarios' => $usuarios
        ]);
    }

    public function mostrarFormIns(){
        $roles = Rol::all();
        return view('formularioUsuario', ['roles' => $roles]);
    }

    public function insertar(Request $request){
         //para validar los datos que llegan del formulario
        $request->validate([
            'id_rol' => ['required', 'integer'],
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'password' => ['required', 'string'],
            'apellidos' => ['required', 'string']

        ]);
        //id id_rol name email password apellidos
        $usuario = new User();
        $usuario->id_rol = $request->id_rol;
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->apellidos = $request->apellidos;
        $usuario->save();

        return redirect('/admin/usuarios');
    }

    public function mostrarFormEd($id){
        $usuario = User::where('id', $id)->first();
        $roles = Rol::all();

        return view('formularioUsuario', [
            'usuario' => $usuario,
            'roles' => $roles
        ]);

    }

    public function editar($id, Request $request){
        $request->validate([
            'id_rol' => ['required', 'integer'],
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'password' => ['required', 'string'],
            'apellidos' => ['required', 'string']
        ]);

        $usuario = User::where('id', $id)->first();
        $usuario->id_rol = $request->id_rol;
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->apellidos = $request->apellidos;
        $usuario->save();

        return redirect('/admin/usuarios');
    }

    public function eliminar($id){
        $usuario = User::where('id', $id)->first();
        $usuario->delete();

        return redirect('/admin/usuarios');
    }
}
