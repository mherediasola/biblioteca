<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $table = 'mesas';
    
    public function salas(){
        return $this->belongsTo(Sala::class, 'id_sala');
    }

    public function users(){
        return $this->belongsToMany(User::class, 'id_usuario');
    }

    public function hasMesa($mesa){
        return $this->salas && $this->salas->nombre == $mesa;
    }
}
