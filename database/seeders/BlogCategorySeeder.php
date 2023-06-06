<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogCategory::insert([
            'name' => 'Fashion'
        ]);
        BlogCategory::insert([
            'name' => 'Lifestyle'
        ]);
        BlogCategory::insert([
            'name' => 'Personal '
        ]);
        BlogCategory::insert([
            'name' => 'Stories '
        ]);
        BlogCategory::insert([
            'name' => 'Travel'
        ]);
    }
}
