<?php

namespace Database\Seeders;

use App\Models\Choose;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChooseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Choose::insert([
            'title' => 'Why Choose US',
            'sub_title' => 'We offer perfect real estate services',
            'button_text' => 'learn more',
            'image' => '1.jpg',
        ]);
    }
}
