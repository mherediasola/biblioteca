<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavegacionController extends Controller
{
    public function noPermitido(){
        return view('noPermitido');
    }
}
