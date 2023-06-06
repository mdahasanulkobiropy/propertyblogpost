<?php

namespace Database\Seeders;

use App\Models\IndexAllText;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndexAllTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        IndexAllText::insert([
            'property_title' => 'Featured Properties',
            'property_sub_title' => 'Browse our latest hot offers',
            'property_button_text' => 'browse all',
            'agent_title' => 'Our Featured Agents',
            'agent_sub_title' => 'Meet the best real estate agents',
            'agent_button_text' => 'see all agents',
        ]);
    }
}
