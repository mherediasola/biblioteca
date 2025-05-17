<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $table = 'idiomas';

    public function obras(){
        return $this->hasMany(Obra::class);
    }
}
