<?php

namespace Database\Seeders;

use App\Models\SampleModels;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SampleModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        SampleModels::factory(20) -> create();
    }
}
