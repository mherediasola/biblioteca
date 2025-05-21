<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mesa;

class Mesas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mesa::create(['id_sala' => '1']);
        Mesa::create(['id_sala' => '1']);
        Mesa::create(['id_sala' => '1']);
        Mesa::create(['id_sala' => '1']);
        Mesa::create(['id_sala' => '2']);
        Mesa::create(['id_sala' => '2']);
        Mesa::create(['id_sala' => '2']);
        Mesa::create(['id_sala' => '2']);
        Mesa::create(['id_sala' => '3']);
        Mesa::create(['id_sala' => '3']);
        Mesa::create(['id_sala' => '3']);
        Mesa::create(['id_sala' => '3']);
        Mesa::create(['id_sala' => '4']);
        Mesa::create(['id_sala' => '4']);
        Mesa::create(['id_sala' => '4']);
        Mesa::create(['id_sala' => '4']);
        Mesa::create(['id_sala' => '5']);
        Mesa::create(['id_sala' => '5']);
        Mesa::create(['id_sala' => '5']);
        Mesa::create(['id_sala' => '5']);
    }
}
