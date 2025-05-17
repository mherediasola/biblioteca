<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $table = 'prestamos';

    public function user(){
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function ejemplares(){
        return $this->belongsToMany(Ejemplar::class, 'detalles_prestamo', 'id_prestamo', 'id_ejemplar', 'id', 'id');
    }

}
