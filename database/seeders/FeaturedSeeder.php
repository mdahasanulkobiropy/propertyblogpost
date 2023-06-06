<?php

namespace Database\Seeders;

use App\Models\Featured;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeaturedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Featured::insert([
            'title' => 'Apartment',
        ]);
        Featured::insert([
            'title' => 'House',
        ]);
        Featured::insert([
            'title' => 'Townhome',
        ]);
        Featured::insert([
            'title' => 'Multi-Family',
        ]);
       
    }
}
