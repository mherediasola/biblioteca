<?php

namespace Database\Seeders;

use App\Models\Prestamo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Prestamos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //id_usuario	estado_activo	fecha_inicio	fecha_final
        
        Prestamo::create(['id_usuario' => 4, 
                         'estado_activo' => True, 
                         'fecha_inicio' => '2025-05-23', 
                         'fecha_final' => '2025-05-30'
        ]);

        Prestamo::create(['id_usuario' => 3, 
                         'estado_activo' => False, 
                         'fecha_inicio' => '2025-03-16', 
                         'fecha_final' => '2025-03-23'
        ]);

        Prestamo::create(['id_usuario' => 10, 
                         'estado_activo' => True, 
                         'fecha_inicio' => '2025-05-16', 
                         'fecha_final' => '2025-05-23'
        ]);

        Prestamo::create(['id_usuario' => 6, 
                         'estado_activo' => True, 
                         'fecha_inicio' => '2025-05-21', 
                         'fecha_final' => '2025-05-28'
        ]);

        Prestamo::create(['id_usuario' => 7, 
                         'estado_activo' => False, 
                         'fecha_inicio' => '2025-05-06', 
                         'fecha_final' => '2025-05-13'
        ]);

        Prestamo::create(['id_usuario' => 4, 
                         'estado_activo' => False, 
                         'fecha_inicio' => '2025-04-01', 
                         'fecha_final' => '2025-04-08'
        ]);

        Prestamo::create(['id_usuario' => 8, 
                         'estado_activo' => True, 
                         'fecha_inicio' => '2025-05-23', 
                         'fecha_final' => '2025-05-30'
        ]);

        Prestamo::create(['id_usuario' => 9, 
                         'estado_activo' => True, 
                         'fecha_inicio' => '2025-05-23', 
                         'fecha_final' => '2025-05-30'
        ]);

        Prestamo::create(['id_usuario' => 10, 
                         'estado_activo' => True, 
                         'fecha_inicio' => '2025-06-06', 
                         'fecha_final' => '2025-06-13'
        ]);

        Prestamo::create(['id_usuario' => 6, 
                         'estado_activo' => False, 
                         'fecha_inicio' => '2025-05-05', 
                         'fecha_final' => '2025-05-19'
        ]);

        Prestamo::create(['id_usuario' => 7, 
                         'estado_activo' => True, 
                         'fecha_inicio' => '2025-05-20', 
                         'fecha_final' => '2025-05-27'
        ]);
    }
}
