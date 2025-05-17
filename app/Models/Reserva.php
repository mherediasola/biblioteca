<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'reservas';

    public function user(){
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function mesa(){
        return $this->belongsTo(Mesa::class, 'id_mesa');
    }
}
