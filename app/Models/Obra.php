<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    protected $table = 'obras';

    public function idioma(){
        return $this->belongsTo(Idioma::class, 'id_idioma');
    }

    public function tipo(){
        return $this->belongsTo(Tipo::class, 'id_tipo');
    }

    public function editorial(){
        return $this->belongsTo(Editorial::class, 'id_editorial');
    }

    public function autores(){
        return $this->belongsToMany(Autor::class, 'obras_escritas_autores', 'id_obra', 'id_autor', 'id', 'id');
    }

    public function ejemplares(){
        return $this->hasMany(Ejemplar::class);
    }
}
