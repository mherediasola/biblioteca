<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Editorial;

class Editoriales extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Editorial::create(['nombre' => 'Cátedra']);
        Editorial::create(['nombre' => 'Minotauro']);
        Editorial::create(['nombre' => 'Espasa']);
        Editorial::create(['nombre' => 'Editorial Planeta']);
        Editorial::create(['nombre' => 'Booket']);
        Editorial::create(['nombre' => 'Destino']);
        Editorial::create(['nombre' => 'Tusquets']);
        Editorial::create(['nombre' => 'Seix Barral']);
    }
}
