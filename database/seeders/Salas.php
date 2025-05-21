<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sala;

class Salas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sala::create(['nombre' => 'Carmen de Burgos']);
        Sala::create(['nombre' => 'Celia Viñas']);
        Sala::create(['nombre' => 'Amalia López Cabrera']);
        Sala::create(['nombre' => 'José Ángel Valente']);
        Sala::create(['nombre' => 'Francisco Villaespesa']);
    }
}
