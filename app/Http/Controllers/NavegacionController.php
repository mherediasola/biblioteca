<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavegacionController extends Controller
{
    public function noPermitido(){
        return view('noPermitido');
    }

    public function contacto(){
        return view("contacto");
    }

    public function servicios(){
        return view("servicios");
    }
}
