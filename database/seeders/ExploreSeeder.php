<?php

namespace Database\Seeders;

use App\Models\Explore;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExploreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Explore::insert([
            'title' => 'Transportation',
        ]);
        Explore::insert([
            'title' => 'Restaurants',
        ]);
        Explore::insert([
            'title' => 'Shopping',
        ]);
        Explore::insert([
            'title' => 'Cafes & Bars',
        ]);
        Explore::insert([
            'title' => 'Arts & Entertainment',
        ]);
        Explore::insert([
            'title' => 'Fitness',
        ]);
    }
}
