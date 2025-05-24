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
        Mesa::create(['id_sala' => 1,
                      'pc' => False
        ]);

        Mesa::create(['id_sala' => 1,
                      'pc' => False
        ]);

        Mesa::create(['id_sala' => 1,
                      'pc' => True
        ]);

        Mesa::create(['id_sala' => 1,
                      'pc' => True
        ]);

        Mesa::create(['id_sala' => 2,
                      'pc' => False
        ]);

        Mesa::create(['id_sala' => 2,
                      'pc' => False
        ]);

        Mesa::create(['id_sala' => 2,
                      'pc' => True
        ]);

        Mesa::create(['id_sala' => 2,
                      'pc' => True
        ]);

        Mesa::create(['id_sala' => 3,
                      'pc' => False
        ]);

        Mesa::create(['id_sala' => 3,
                      'pc' => False
        ]);

        Mesa::create(['id_sala' => 3,
                      'pc' => True
        ]);

        Mesa::create(['id_sala' => 3,
                      'pc' => True
        ]);

        Mesa::create(['id_sala' => 4,
                      'pc' => False
        ]);

        Mesa::create(['id_sala' => 4,
                      'pc' => False
        ]);

        Mesa::create(['id_sala' => 4,
                      'pc' => True
        ]);

        Mesa::create(['id_sala' => 4,
                      'pc' => True
        ]);

        Mesa::create(['id_sala' => 5,
                      'pc' => False
        ]);

        Mesa::create(['id_sala' => 5,
                      'pc' => False
        ]);

        Mesa::create(['id_sala' => 5,
                      'pc' => True
        ]);

        Mesa::create(['id_sala' => 5,
                      'pc' => True
        ]);
        


        
    }
}
