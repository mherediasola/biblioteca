<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obra_escrita_Autor extends Model
{
    protected $table = 'obras_escritas_autores';
    
    public function obra(){
        return $this->belongsTo(Obra::class, 'id_obra');
    }

    public function autor(){
        return $this->belongsTo(Autor::class, 'id_autor');
    }
}
