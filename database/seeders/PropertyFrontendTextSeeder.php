<?php

namespace Database\Seeders;

use App\Models\PropertyFrontendText;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertyFrontendTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PropertyFrontendText::insert([
            'price' => 'Price',
            'bed' => 'Beds',
            'bath' => 'Baths',
            'type' => 'Type',
            'area' => 'Size (sq ft)',
            'buttontext' => 'apply filters',
        ]);
    }
}
