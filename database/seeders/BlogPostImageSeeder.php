<?php

namespace Database\Seeders;

use App\Models\BlogPostImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogPostImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogPostImage::insert([
            'blogpost_id' => '1.jpg',
            'blogpost_image' => '1.jpg',
        ]);
        BlogPostImage::insert([
            'blogpost_id' => '1',
            'blogpost_image' => '2',
        ]);
        BlogPostImage::insert([
            'blogpost_id' => '2.jpg',
            'blogpost_image' => '3.jpg',
        ]);
        BlogPostImage::insert([
            'blogpost_id' => '2.jpg',
            'blogpost_image' => '4.jpg',
        ]);
        BlogPostImage::insert([
            'blogpost_id' => '3.jpg',
            'blogpost_image' => '5.jpg',
        ]);
        BlogPostImage::insert([
            'blogpost_id' => '3.jpg',
            'blogpost_image' => '1.jpg',
        ]);
        BlogPostImage::insert([
            'blogpost_id' => '4.jpg',
            'blogpost_image' => '2.jpg',
        ]);
        BlogPostImage::insert([
            'blogpost_id' => '4.jpg',
            'blogpost_image' => '3.jpg',
        ]);
        BlogPostImage::insert([
            'blogpost_id' => '5.jpg',
            'blogpost_image' => '4.jpg',
        ]);
        BlogPostImage::insert([
            'blogpost_id' => '4.jpg',
            'blogpost_image' => '5.jpg',
        ]);
        BlogPostImage::insert([
            'blogpost_id' => '6.jpg',
            'blogpost_image' => '1.jpg',
        ]);
        BlogPostImage::insert([
            'blogpost_id' => '6.jpg',
            'blogpost_image' => '2.jpg',
        ]);
    }
}
