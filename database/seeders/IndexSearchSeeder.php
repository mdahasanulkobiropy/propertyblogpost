<?php

namespace Database\Seeders;

use App\Models\IndexSearch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndexSearchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        IndexSearch::insert([

            'title' => 'Search Smarter, From Anywhere',
            'sub_title' => 'Power your search with our Resideo real estate platform, for timely listings and a seamless experience.',
            'button_text' => 'search now',
            'image' => 'cta-fig-3.jpg'
        ]);
    }
}
