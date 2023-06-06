<?php

namespace Database\Seeders;

use App\Models\ImageProperty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagePropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ImageProperty::insert([
            'images' => '1.jpg',
            'property_id' => '1',
        ]);
        ImageProperty::insert([
            'images' => '2.jpg',
            'property_id' => '1',
        ]);
        ImageProperty::insert([
            'images' => '3.jpg',
            'property_id' => '1',
        ]);

        ImageProperty::insert([
            'images' => '1.jpg',
            'property_id' => '2',
        ]);
        ImageProperty::insert([
            'images' => '2.jpg',
            'property_id' => '2',
        ]);
        ImageProperty::insert([
            'images' => '3.jpg',
            'property_id' => '2',
        ]);
        ImageProperty::insert([
            'images' => '1.jpg',
            'property_id' => '3',
        ]);
        ImageProperty::insert([
            'images' => '2.jpg',
            'property_id' => '3',
        ]);
        ImageProperty::insert([
            'images' => '3.jpg',
            'property_id' => '3',
        ]);
        ImageProperty::insert([
            'images' => '4.jpg',
            'property_id' => '4',
        ]);
        ImageProperty::insert([
            'images' => '5.jpg',
            'property_id' => '4',
        ]);
        ImageProperty::insert([
            'images' => '6.jpg',
            'property_id' => '4',
        ]);
        ImageProperty::insert([
            'images' => '4.jpg',
            'property_id' => '5',
        ]);
        ImageProperty::insert([
            'images' => '5.jpg',
            'property_id' => '5',
        ]);
        ImageProperty::insert([
            'images' => '6.jpg',
            'property_id' => '5',
        ]);
        ImageProperty::insert([
            'images' => '4.jpg',
            'property_id' => '6',
        ]);
        ImageProperty::insert([
            'images' => '5.jpg',
            'property_id' => '6',
        ]);
        ImageProperty::insert([
            'images' => '6.jpg',
            'property_id' => '6',
        ]);
    }
}
