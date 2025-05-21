<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;

class Roles extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rol::create(['tipo' => 'admin']);
        Rol::create(['tipo' => 'bibliotecario']);
        Rol::create(['tipo' => 'estudiante']);
        Rol::create(['tipo' => 'investigador']);
    }
}