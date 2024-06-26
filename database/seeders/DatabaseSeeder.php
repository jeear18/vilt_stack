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
       
        // \app\Models\Listing::factory(20) -> create();
         //Listing::factory(20) -> create();
         Game::factory(20) -> create();
        // $this->call([
        //     GameSeeder::class,
        // ]);
        
        
    }
}


