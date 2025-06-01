<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SesionController extends Controller
{
    public function mostrar(){
        return view('inicioSesion');
    }

    public function iniciarSesion(Request $request){
        $credenciales = $request->validate([
            'email' => ['required', 'string'],
            'password' => ['required', 'string']
        ]);
        
        if(Auth::attempt($credenciales)) {
            $request->session()->regenerate();
            //de momento redirige a inicio, pero cuando pueda lo mandaré a la sección de cuenta
            //comprobar su rol y si es admin o bibliotecario mandarlo a la página de inicio de 
            //administración
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    public function mostrarRegistro(){
        return view('formularioRegistro');
    }

    public function registro(Request $request){
        $request->validate([
            'email' => ['required', 'string'],
            'password' => ['required', 'string'],
            'rePassword' => ['required', 'string'],
            'name' => ['required', 'string'],
            'apellidos' => ['required', 'string'],
        ]);
        //si la contraseña es igual, crea el nuevo usuario
        if($request->password == $request->rePassword){
            $usuario = new User();
            $usuario->id_rol = 3; //Por defecto tendrá el rol de estudiante
            $usuario->email = $request->email;
            $usuario->password = Hash::make($request->password);
            $usuario->name = $request->name;
            $usuario->apellidos = $request->apellidos;

            if(User::where('email', $request->email)->first() != null) {
                return redirect('/registro');
            }

            $usuario->save();

            //cambiar para que redirija a mi-cuenta
            return redirect('/');

        }else{
            //la contraseña no coincide
            return redirect('/registro');
        }
        
    }


    public function cerrarSesion() {
        Session::flush();
        Auth::logout();

        return redirect('/login');
    }
}
