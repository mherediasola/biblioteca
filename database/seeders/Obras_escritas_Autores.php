<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Obra_escrita_Autor;

class Obras_escritas_Autores extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //id_obra	id_autor	
        Obra_escrita_Autor::create(['id_obra' => 1, 
                                    'id_autor' => 1
        ]);

        Obra_escrita_Autor::create(['id_obra' => 2, 
                                    'id_autor' => 1
        ]);

        Obra_escrita_Autor::create(['id_obra' => 3, 
                                    'id_autor' => 7
        ]);

        Obra_escrita_Autor::create(['id_obra' => 4, 
                                    'id_autor' => 2
        ]);

        Obra_escrita_Autor::create(['id_obra' => 5, 
                                    'id_autor' => 3
        ]);

        Obra_escrita_Autor::create(['id_obra' => 6, 
                                    'id_autor' => 4
        ]);

        Obra_escrita_Autor::create(['id_obra' => 7, 
                                    'id_autor' => 5
        ]);

        Obra_escrita_Autor::create(['id_obra' => 8, 
                                    'id_autor' => 5
        ]);

        Obra_escrita_Autor::create(['id_obra' => 9, 
                                    'id_autor' => 7
        ]);

        Obra_escrita_Autor::create(['id_obra' => 10, 
                                    'id_autor' => 6
        ]);

        Obra_escrita_Autor::create(['id_obra' => 11, 
                                    'id_autor' => 3
        ]);

    }
}
