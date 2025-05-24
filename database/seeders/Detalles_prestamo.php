<?php

namespace Database\Seeders;

use App\Models\Detalle_prestamo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Detalles_prestamo extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //id_prestamo	id_ejemplar

        Detalle_prestamo::create(['id_prestamo' => 1, 
                                  'id_ejemplar' => 1
        ]);

        Detalle_prestamo::create(['id_prestamo' => 1, 
                                  'id_ejemplar' => 22
        ]);

        Detalle_prestamo::create(['id_prestamo' => 2, 
                                  'id_ejemplar' => 2
        ]);

        Detalle_prestamo::create(['id_prestamo' => 3, 
                                  'id_ejemplar' => 7
        ]);

        Detalle_prestamo::create(['id_prestamo' => 3, 
                                  'id_ejemplar' => 19
        ]);

        Detalle_prestamo::create(['id_prestamo' => 4, 
                                  'id_ejemplar' => 4
        ]);

        Detalle_prestamo::create(['id_prestamo' => 5, 
                                  'id_ejemplar' => 9
        ]);

        Detalle_prestamo::create(['id_prestamo' => 6, 
                                  'id_ejemplar' => 13
        ]);

        Detalle_prestamo::create(['id_prestamo' => 7, 
                                  'id_ejemplar' => 15
        ]);

        Detalle_prestamo::create(['id_prestamo' => 8, 
                                  'id_ejemplar' => 26
        ]);

        Detalle_prestamo::create(['id_prestamo' => 9, 
                                  'id_ejemplar' => 27
        ]);

        Detalle_prestamo::create(['id_prestamo' => 10, 
                                  'id_ejemplar' => 30
        ]);

        Detalle_prestamo::create(['id_prestamo' => 10, 
                                  'id_ejemplar' => 7
        ]);

        Detalle_prestamo::create(['id_prestamo' => 11, 
                                  'id_ejemplar' => 14
        ]);

        Detalle_prestamo::create(['id_prestamo' => 11, 
                                  'id_ejemplar' => 3
        ]);
    }
}
