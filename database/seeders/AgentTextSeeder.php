<?php

namespace Database\Seeders;

use App\Models\AgentText;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgentTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AgentText::insert([
            'title' => 'Our Agents',
            'sub_title' => "Pairing the industry's top technology with unsurpassed local expertise.",
            'find_title' => 'Find an Agent',
            'image' => 'agent_bg.jpg',
            'name' => 'name',
            'location' => 'location'
        ]);
    }
}
