<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipo;

class Tipos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tipo::create(['nombre' => 'Libro']);
        Tipo::create(['nombre' => 'Revista']);
        Tipo::create(['nombre' => 'Artículo']);
        Tipo::create(['nombre' => 'Ebook']);
    }
}
