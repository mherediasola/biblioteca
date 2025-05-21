<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Idioma;

class Idiomas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Idioma::create(['nombre' => 'Español']);
        Idioma::create(['nombre' => 'Inglés']);
        Idioma::create(['nombre' => 'Francés']);
        Idioma::create(['nombre' => 'Italiano']);
        Idioma::create(['nombre' => 'Portugués']);
        Idioma::create(['nombre' => 'Rumano']);
        Idioma::create(['nombre' => 'Alemán']);
        Idioma::create(['nombre' => 'Mandarín']);
        Idioma::create(['nombre' => 'Japonés']);
        Idioma::create(['nombre' => 'Árabe']);
        Idioma::create(['nombre' => 'Latín']);
        Idioma::create(['nombre' => 'Griego']);
    }
}
