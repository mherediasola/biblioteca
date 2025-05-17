<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $table = 'mesas';
    
    public function sala(){
        return $this->belongsTo(Sala::class, 'id_sala');
    }
/*
    public function estaReservada($fecha, $hora_inicio, $hora_final){
        return $this-> faltan cositas 
    }
 */  
}
