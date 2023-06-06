<?php

namespace Database\Seeders;

use App\Models\ChooseItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChooseItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ChooseItem::insert([
            'title' => 'Find your future home',
            'sub_title_part1' => 'We help you find a new home by offering',
            'sub_title_part2' => 'a smart real estate experience',
            'button_text' => 'Learn More',
            'image' => 'service-icon-1.svg',
            'route' => 'properties.frontend',

        ]);
        ChooseItem::insert([
            'title' => 'Experienced agents',
            'sub_title_part1' => 'Find an agent who knows',
            'sub_title_part2' => 'your market best',
            'button_text' => 'Learn More',
            'image' => 'service-icon-2.svg',
            'route' => 'agents.frontend',

        ]);
        ChooseItem::insert([
            'title' => 'Buy or rent homes',
            'sub_title_part1' => 'Millions of houses and apartments',
            'sub_title_part2' => 'in your favourite cities',
            'button_text' => 'Learn More',
            'image' => 'service-icon-3.svg',
            'route' => 'properties.frontend',
        ]);
        ChooseItem::insert([
            'title' => 'Experienced agents',
            'sub_title_part1' => 'Find an agent who knows',
            'sub_title_part2' => 'your market best',
            'button_text' => 'Learn More',
            'image' => 'service-icon-2.svg',
            'route' => 'agents.frontend',

        ]);
    }
}
