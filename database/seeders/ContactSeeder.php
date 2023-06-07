<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::insert([
            'title' => 'Contact Us',
            'sub_title' => 'Say hello. Tell us how we can guide you.',
            'image' => 'contact.jpg',
            'office_title' => 'Our Offices',
            'massage_title' => 'Send Us A Message',
            'map_title' => 'Our Locations',
        ]);
    }
}
