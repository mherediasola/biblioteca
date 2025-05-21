<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pais;

class Paises extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pais::create(['nombre' => 'España',
                      'continente' => 'Europa'
        ]);

        Pais::create(['nombre' => 'Italia',
                      'continente' => 'Europa'
        ]);

        Pais::create(['nombre' => 'Portugal',
                      'continente' => 'Europa'
        ]);

        Pais::create(['nombre' => 'Inglaterra',
                      'continente' => 'Europa'
        ]);

        Pais::create(['nombre' => 'Chad',
                      'continente' => 'África'
        ]);

        Pais::create(['nombre' => 'Sudán',
                      'continente' => 'África'
        ]);

        Pais::create(['nombre' => 'Egipto',
                      'continente' => 'África'
        ]);

        Pais::create(['nombre' => 'Ghana',
                      'continente' => 'África'
        ]);

        Pais::create(['nombre' => 'China',
                      'continente' => 'Asia'
        ]);

        Pais::create(['nombre' => 'Japón',
                      'continente' => 'Asia'
        ]);

        Pais::create(['nombre' => 'Tailandia',
                      'continente' => 'Asia'
        ]);

        Pais::create(['nombre' => 'India',
                      'continente' => 'Asia'
        ]);
        
        Pais::create(['nombre' => 'Indonesia',
                      'continente' => 'Asia'
        ]);

        Pais::create(['nombre' => 'Perú',
                      'continente' => 'América'
        ]);

        Pais::create(['nombre' => 'Canadá',
                      'continente' => 'América'
        ]);

        Pais::create(['nombre' => 'México',
                      'continente' => 'América'
        ]);

        Pais::create(['nombre' => 'Nicaragua',
                      'continente' => 'América'
        ]);
        
        Pais::create(['nombre' => 'Cuba',
                      'continente' => 'América'
        ]);

        Pais::create(['nombre' => 'Australia',
                      'continente' => 'Oceanía'
        ]);
        
    }
}
