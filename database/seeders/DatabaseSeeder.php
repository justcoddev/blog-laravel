<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Lenguaje;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      User::factory(10)->create();
       Lenguaje::factory(50)->create();
    }
}
