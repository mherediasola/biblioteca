<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //id	id_rol	name	email	password apellidos
        User::create(['id_rol' => '1',
                      'name' => 'Margarita',
                      'email' => 'admin@gmail.com',
                      'password' => Hash::make('admin123'),
                      'apellidos' => 'Heredia Sola'
        ]);

        User::create(['id_rol' => '2', 
                      'name' => 'Carlos', 
                      'email' => 'carlos@gmail.com', 
                      'password' => Hash::make('carlos123'), 
                      'apellidos' => 'Gómez Pérez'
        ]);

        User::create(['id_rol' => '3', 
                      'name' => 'Ana', 
                      'email' => 'ana@gmail.com', 
                      'password' => Hash::make('ana123'), 
                      'apellidos' => 'López Fernández'
        ]);

        User::create(['id_rol' => '4',
                      'name' => 'Javier', 
                      'email' => 'javier@gmail.com', 
                      'password' => Hash::make('javier123'), 
                      'apellidos' => 'Martínez Ruiz'
        ]);

        User::create(['id_rol' => '2', 
                      'name' => 'Sofía', 
                      'email' => 'sofia@gmail.com', 
                      'password' => Hash::make('sofia123'), 
                      'apellidos' => 'Jiménez Sánchez'
        ]);
        
        User::create(['id_rol' => '3', 
                      'name' => 'Alberto', 
                      'email' => 'alberto@gmail.com', 
                      'password' => Hash::make('alberto123'), 
                      'apellidos' => 'Ramírez Herrera'
        ]);

        User::create(['id_rol' => '3', 
                      'name' => 'Lucía', 
                      'email' => 'lucia@gmail.com', 
                      'password' => Hash::make('lucia123'), 
                      'apellidos' => 'Navarro Torres'
        ]);

        User::create(['id_rol' => '4', 
                      'name' => 'Ricardo', 
                      'email' => 'ricardo@gmail.com', 
                      'password' => Hash::make('ricardo123'), 
                      'apellidos' => 'Mendoza Vázquez'
        ]);

        User::create(['id_rol' => '3', 
                      'name' => 'Elena', 
                      'email' => 'elena@gmail.com', 
                      'password' => Hash::make('elena123'), 
                      'apellidos' => 'Castro Díaz'
        ]);

        User::create(['id_rol' => '3', 
                      'name' => 'Daniel', 
                      'email' => 'daniel@gmail.com', 
                      'password' => Hash::make('daniel123'), 
                      'apellidos' => 'Morales Gutiérrez'
        ]);
    }
}
