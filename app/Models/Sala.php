<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $table = 'salas';

    public function mesas(){
        return $this->hasMany(Mesa::class);
    }
}
