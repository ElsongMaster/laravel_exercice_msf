<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Batiment::factory(1)->create();
         \App\Models\Formation::factory(6)->create();
         \App\Models\Typeformation::factory(10)->create();
         \App\Models\Eleve::factory(50)->create();
    }
}
