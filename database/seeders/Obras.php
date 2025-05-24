<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Obra;

class Obras extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //titulo	id_tipo	anyo_publicacion	id_idioma	id_editorial	edicion	

        Obra::create(['titulo' => 'Don Quijote de la Mancha',
                      'id_tipo' => 1,
                      'anyo_publicacion' => '2015',
                      'id_idioma' => 1,
                      'id_editorial' => 9,
                      'edicion' => '1ª'
        ]);

        Obra::create(['titulo' => 'Don Quixote Of La Mancha',
                      'id_tipo' => 4,
                      'anyo_publicacion' => '2016',
                      'id_idioma' => 2,
                      'id_editorial' => 10,
                      'edicion' => ''
        ]);

        Obra::create(['titulo' => 'Cien años de soledad', 
                      'id_tipo' => 1, 
                      'anyo_publicacion' => '1967', 
                      'id_idioma' => 1, 
                      'id_editorial' => 7, 
                      'edicion' => '1ª'
        ]);

        Obra::create(['titulo' => 'La Divina Comedia', 
                      'id_tipo' => 1, 
                      'anyo_publicacion' => '2018', 
                      'id_idioma' => 1, 
                      'id_editorial' => 1, 
                      'edicion' => '3ª'
        ]);

        Obra::create(['titulo' => 'Il nome della rosa', 
                      'id_tipo' => 1, 
                      'anyo_publicacion' => '1999',
                      'id_idioma' => 4, 
                      'id_editorial' => 11, 
                      'edicion' => '2ª'
        ]);

        Obra::create(['titulo' => 'Livro do Desassossego', 
                      'id_tipo' => 4, 
                      'anyo_publicacion' => '1982', 
                      'id_idioma' => 5, 
                      'id_editorial' => 8, 
                      'edicion' => '3ª'
        ]);

        Obra::create(['titulo' => 'Hamlet', 
                      'id_tipo' => 1, 
                      'anyo_publicacion' => '2017', 
                      'id_idioma' => 2, 
                      'id_editorial' => 12, 
                      'edicion' => '4ª'
        ]);

        Obra::create(['titulo' => 'Romeo y Julieta', 
                      'id_tipo' => 1, 
                      'anyo_publicacion' => '2022', 
                      'id_idioma' => 1, 
                      'id_editorial' => 3, 
                      'edicion' => '1ª'
        ]);

        Obra::create(['titulo' => 'El amor en los tiempos del cólera', 
                      'id_tipo' => 1, 
                      'anyo_publicacion' => '2007', 
                      'id_idioma' => 1, 
                      'id_editorial' => 13, 
                      'edicion' => '2ª'
        ]);

        Obra::create(['titulo' => 'Un enfant du pays', 
                      'id_tipo' => 1, 
                      'anyo_publicacion' => '1995', 
                      'id_idioma' => 3, 
                      'id_editorial' => 5, 
                      'edicion' => '4ª'
        ]);

        Obra::create(['titulo' => 'El péndulo de Foucault', 
                      'id_tipo' => 1, 
                      'anyo_publicacion' => '2003', 
                      'id_idioma' => 1, 
                      'id_editorial' => 13,                                                                                                                 
                      'edicion' => '2ª'
        ]);
    }
}
