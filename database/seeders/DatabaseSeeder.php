<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(Roles::class);
        $this->call(Idiomas::class);
        $this->call(Tipos::class);
        $this->call(Editoriales::class);
        $this->call(Salas::class);
        $this->call(Mesas::class);
        $this->call(Paises::class);
        $this->call(Autores::class);
        $this->call(Obras::class);
    }
}
