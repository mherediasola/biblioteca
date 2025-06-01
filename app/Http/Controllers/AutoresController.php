<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;
use App\Models\Autor;

class AutoresController extends Controller
{
    public function mostrar(){
        $autores = Autor::all();

        return view('autores', ['autores'=> $autores]);
    }

    public function listar(){
         $autores = Autor::all();

        return response()->json([
            'status' => 200,
            'autores' => $autores
        ]);
    }

    public function mostrarFormIns(){
        $paises = Pais::all();
        return view('formularioAutor', ['paises' => $paises]);
    }

    public function insertar(Request $request){
         //para validar los datos que llegan del formulario
        $request->validate([
            'nombre' => ['required', 'string'],
            'apellidos' => ['required', 'string'],
            'id_pais' => ['required', 'integer']

        ]);
        //id nombre apellidos id_pais
        $autor = new Autor();
        $autor->nombre = $request->nombre;
        $autor->apellidos = $request->apellidos;
        $autor->id_pais = $request->id_pais;
        $autor->save();

        return redirect('/admin/autores');
    }

    public function mostrarFormEd($id){
        $autor = Autor::where('id', $id)->first();
        $paises = Pais::all();

        return view('formularioAutor', [
            'autor' => $autor,
            'paises' => $paises
        ]);

    }

    public function editar($id, Request $request){
        $request->validate([
            'nombre' => ['required', 'string'],
            'apellidos' => ['required', 'string'],
            'id_pais' => ['required', 'integer']

        ]);

        $autor = Autor::where('id', $id)->first();
        $autor->nombre = $request->nombre;
        $autor->apellidos = $request->apellidos;
        $autor->id_pais = $request->id_pais;
        $autor->save();

        return redirect('/admin/autores');
    }

    public function eliminar($id){
        $autor = Autor::where('id', $id)->first();
        $autor->delete();

        return redirect('/admin/autores');
    }

    public function dashboard(){
        //MODIFICAR CONSULTA
        $datos = Autor::getAutorMasLeido();

        return view('dashboard', [
            'datos' => $datos->toArray()
        ]);
    }
}
