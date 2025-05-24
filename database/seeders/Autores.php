<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Autor;

class Autores extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //nombre	apellidos	id_pais	
        Autor::create(['nombre' => 'Miguel (de)',
                      'apellidos' => 'Cervantes Saavedra',
                      'id_pais' => 1,
        ]);

        Autor::create(['nombre' => 'Dante',
                      'apellidos' => 'Alighieri',
                      'id_pais' => 2,
        ]);

        Autor::create(['nombre' => 'Umberto',
                      'apellidos' => 'Eco',
                      'id_pais' => 2,
        ]);

        Autor::create(['nombre' => 'Fernando',
                      'apellidos' => 'Pesoa',
                      'id_pais' => 3,
        ]);

        Autor::create(['nombre' => 'William',
                      'apellidos' => 'Shakespeare',
                      'id_pais' => 4,
        ]);

        Autor::create(['nombre' => 'Joseph',
                      'apellidos' => 'Brahim Seid',
                      'id_pais' => 5,
        ]);

        Autor::create(['nombre' => 'Gabriel',
                      'apellidos' => 'García Márquez',
                      'id_pais' => 5,
        ]);
        
    }
}
