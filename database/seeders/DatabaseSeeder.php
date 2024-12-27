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
        // User::factory(10)->create();

      
        User::factory()->create([
            'name' => 'Chayan Roy',
            'email' => 'chayan@gmail.com',
            'password' => '12345678'
        ]);

        User::factory()->create([
            'name' => 'Rahamat Ullah',
            'email' => 'rahamat@gmail.com',
            'password' => '12345678'
        ]);
    }
}
