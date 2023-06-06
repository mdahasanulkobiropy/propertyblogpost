<?php

namespace Database\Seeders;

use App\Models\BlogPostText;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogPostTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogPostText::insert([
            'title' => 'Latest Articles',
            'sub_title' => 'Read our latest articles on real estate, architecture, interior design, and more',
            'featured' => 'featured',
            'search' => 'Search Articles',
            'category' => 'Categories',
            'tag' => 'Tags',
            'subscribe_title' => 'Stay Up to Date',
            'subscribe_sub_title' => 'Subscribe to our newsletter to receive our weekly feed',
            'subscribe_button' => 'subscribe',
            'subscribe_image' => 'blogpost.jpg'
        ]);
    }
}
