<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Students;
use Illuminate\Database\Seeder;
use Database\Seeders\KelasSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            KelasSeeder::class,
        ]);
        
        User::factory(10)->create();
        Students::factory(30)->create();
    }
}
