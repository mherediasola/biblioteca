<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ejemplar extends Model
{
    protected $table = 'ejemplares';

    public function obra(){
        return $this->belongsTo(Obra::class, 'id_obra');
    }

    public function estaEnPrestamo(){
        $prestamos_activos = $this->belongsToMany(Prestamo::class, 'detalles_prestamo', 'id_ejemplar', 'id_prestamo', 'id', 'id')
                            ->where('estado_activo', true ); //tendré que modificarlo con un where
        //Controla si devuelve más de un registro, entonces si es así el préstamo sigue activo y el ejemplar no estará
        //disponible                    
        return (count($prestamos_activos) > 0); 
    }

    public function getCantidadEjemplaresObra($id){
        return self::select(DB::raw('COUNT(ejemplares.id_obra) as cantidad'))
        ->join('obras', 'obras.id', '=', 'ejemplares.id_obra')
        ->where('ejemplares.id_obra', '=', $id)
        ->groupby('ejemplares.id_obra')
        ->value('cantidad');
    }
}
