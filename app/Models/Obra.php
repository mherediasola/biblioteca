<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
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

    public static function getObrasMasPrestadas(){
        return self::select('obras.id', 'obras.titulo as titulo', 
        DB::raw('COUNT(detalles_prestamo.id) AS total_prestamos'))
        ->join('ejemplares', 'obras.id', '=', 'ejemplares.id_obra')
        ->join('detalles_prestamo', 'ejemplares.id', '=', 'detalles_prestamo.id_ejemplar')
        ->groupBy('obras.id', 'obras.titulo')
        ->orderBy('total_prestamos', 'desc')
        ->limit(5)
        ->get();
    }
}
