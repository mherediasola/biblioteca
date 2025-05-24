<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reserva;

class Reservas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //id_usuario	id_mesa	fecha	hora_inicio	  hora_final	
        Reserva::create(['id_usuario' => 3, 
                         'id_mesa' => 1, 
                         'fecha' => '2025-05-23', 
                         'hora_inicio' => '12:00:00', 
                         'hora_final' => '13:30:00'
        ]);

        Reserva::create(['id_usuario' => 4, 
                         'id_mesa' => 2, 
                         'fecha' => '2025-05-23', 
                         'hora_inicio' => '16:30:00', 
                         'hora_final' => '17:45:00'
        ]);

        Reserva::create(['id_usuario' => 6, 
                         'id_mesa' => 3, 
                         'fecha' => '2025-05-26', 
                         'hora_inicio' => '10:00:00', 
                         'hora_final' => '11:00:00'
        ]);

        Reserva::create(['id_usuario' => 7, 
                         'id_mesa' => 4, 
                         'fecha' => '2025-05-26', 
                         'hora_inicio' => '12:00:00', 
                         'hora_final' => '14:30:00'
        ]);

        Reserva::create(['id_usuario' => 3, 
                         'id_mesa' => 1, 
                         'fecha' => '2025-05-27', 
                         'hora_inicio' => '18:00:00', 
                         'hora_final' => '20:30:00'
        ]);

        Reserva::create(['id_usuario' => 8, 
                         'id_mesa' => 3, 
                         'fecha' => '2025-05-27', 
                         'hora_inicio' => '11:00:00', 
                         'hora_final' => '13:00:00'
        ]);

        Reserva::create(['id_usuario' => 9, 
                         'id_mesa' => 1, 
                         'fecha' => '2025-05-28', 
                         'hora_inicio' => '15:00:00', 
                         'hora_final' => '16:30:00'
        ]);

        Reserva::create(['id_usuario' => 6, 
                         'id_mesa' => 12, 
                         'fecha' => '2025-05-29', 
                         'hora_inicio' => '17:30:00', 
                         'hora_final' => '19:30:00'
        ]);

        Reserva::create(['id_usuario' => 4, 
                         'id_mesa' => 8, 
                         'fecha' => '2025-05-29', 
                         'hora_inicio' => '15:30:00', 
                         'hora_final' => '18:30:00'
        ]);

        Reserva::create(['id_usuario' => 7, 
                         'id_mesa' => 1, 
                         'fecha' => '2025-05-30', 
                         'hora_inicio' => '09:00:00', 
                         'hora_final' => '11:00:00'
        ]);
    }
}
