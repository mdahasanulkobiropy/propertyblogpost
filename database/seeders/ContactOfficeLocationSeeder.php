<?php

namespace Database\Seeders;

use App\Models\ContactOfficeLocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactOfficeLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactOfficeLocation::insert([
            'city_name' => 'Los Angeles',
            'floor_position' => '90 Fifth Avenue, 3rd Floor',
            'location' => 'Los Angeles, CA 1980',
            'phone' => '(123) 789-7390',
            'email' => 'office-la@resideo.com',
        ]);
        ContactOfficeLocation::insert([
            'city_name' => 'New York',
            'floor_position' => '90 Fifth Avenue, 3rd Floor',
            'location' => 'Los Angeles, CA 1980',
            'phone' => '(123) 789-7390',
            'email' => 'office-la@resideo.com',
        ]);
        ContactOfficeLocation::insert([
            'city_name' => 'San Francisco',
            'floor_position' => '90 Fifth Avenue, 3rd Floor',
            'location' => 'Los Angeles, CA 1980',
            'phone' => '(123) 789-7390',
            'email' => 'office-la@resideo.com',
        ]);



    }
}
