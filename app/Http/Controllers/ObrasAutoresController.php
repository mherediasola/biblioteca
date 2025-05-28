<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obra_escrita_Autor;
use App\Models\Obra;
use App\Models\Autor;

class ObrasAutoresController extends Controller
{
    public function mostrar(){
        $obrasAutores = Obra_escrita_Autor::all();

        return view('obrasAutores', ['obrasAutores'=> $obrasAutores]);
    }

    public function listar(){
         $obrasAutores = Obra_escrita_Autor::all();

        return response()->json([
            'status' => 200,
            'obrasAutores' => $obrasAutores
        ]);
    }

    public function mostrarFormIns(){
        $obras = Obra::All();
        $autores = Autor::All();
        return view('formularioObrasAutores', [
            'obras' => $obras,
            'autores' => $autores 
        ]);
    }

    public function insertar(Request $request){
         //para validar los datos que llegan del formulario
        $request->validate([
            'id_obra' => ['required', 'integer'],
            'id_autor' => ['required', 'integer']
        ]);

        $obrasAutores = new Obra_escrita_Autor();
        $obrasAutores->id_obra = $request->id_obra;
        $obrasAutores->id_autor = $request->id_autor;
        $obrasAutores->save();

        return redirect('/admin/obras-autores');
    }

    public function mostrarFormEd($id){
        $obraAutor = Obra_escrita_Autor::where('id', $id)->first();
        $obras = Obra::All();
        $autores = Autor::All();
        return view('formularioObrasAutores', [
            'obraAutor' => $obraAutor,
            'obras' => $obras,
            'autores' => $autores 
        ]);

    }

    public function editar($id, Request $request){
        $request->validate([
            'id_obra' => ['required', 'integer'],
            'id_autor' => ['required', 'integer']
        ]);

        $obrasAutores = Obra_escrita_Autor::where('id', $id)->first();
        $obrasAutores->id_obra = $request->id_obra;
        $obrasAutores->id_autor = $request->id_autor;
        $obrasAutores->save();

        return redirect('/admin/obras-autores');
    }

    public function eliminar($id){
        $obrasAutores = Obra_escrita_Autor::where('id', $id)->first();
        $obrasAutores->delete();

        return redirect('/admin/obras-autores');
    }
}
