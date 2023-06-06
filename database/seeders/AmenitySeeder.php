<?php

namespace Database\Seeders;

use App\Models\Amenity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AmenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Amenity::insert([
            'title' => 'Internet',
            'icon_class' => 'fa fa-wifi',
        ]);
        Amenity::insert([
            'title' => 'Garage',
            'icon_class' => 'fa fa-car',
        ]);
        Amenity::insert([
            'title' => 'Air Conditioning',
            'icon_class' => 'fa fa-sun-o',
        ]);
        Amenity::insert([
            'title' => 'Dishwasher',
            'icon_class' => 'fa fa-bullseye',
        ]);
        Amenity::insert([
            'title' => 'Disposal',
            'icon_class' => 'fa fa-recycle',
        ]);
        Amenity::insert([
            'title' => 'Balcony',
            'icon_class' => 'fa fa-clone',
        ]);
        Amenity::insert([
            'title' => 'Gym',
            'icon_class' => 'fa fa-futbol-o',
        ]);
        Amenity::insert([
            'title' => 'Bar',
            'icon_class' => 'fa fa-glass',
        ]);
        Amenity::insert([
            'title' => ' Playroom',
            'icon_class' => 'fa fa-smile-o',
        ]);
    }
}
