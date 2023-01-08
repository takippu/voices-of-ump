<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ConfessionPost;
use App\Models\PetitionPost;
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
        //User Seeders
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'roles' => '1',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Test User 2',
            'email' => 'test2@example.com',
            'roles' => '1',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'roles' => '0',
        ]);
         //confession seeders
         PetitionPost::factory(10)->create();
        //confession seeders
        \App\Models\ConfessionPost::factory(10)->create();


        
    }
}
