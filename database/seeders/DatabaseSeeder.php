<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Games;
use App\Models\Listing;
use App\Models\Logs;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
       
        // User::factory(2) -> create();
        //  Listing::factory(10) -> create();
        //  Game::factory(20) -> create();
        // $this->call([
        //     GameSeeder::class,
        // ]);
       
        // User::factory()->create([
        //     'name' => 'Test User1',
        //     'email' => 'test@example1.com',
        //     'is_admin' => false
        // ]);
        // User::factory()->create([
        //     'name' => 'Test User1',
        //     'email' => 'test@example3.com',
        //     'is_admin' => false
        // ]);
       
        \App\Models\Listing::factory(10)->create();
        Listing::factory(10)->create([
            'by_user_id' => 3
        ]);
        // Listing::factory(10)->create([
        //     'by_user_id' => 2
        // ]);
        
        
    }
}


