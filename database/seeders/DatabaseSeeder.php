<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BlogPost;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            FeaturedSeeder::class,
            StatusSeeder::class,
            AmenitySeeder::class,
            ExploreSeeder::class,
            AgentSeeder::class,
            PropertySeeder::class,
            ImagePropertySeeder::class,
            AmentiyPropertySeeder::class,
            ExplorePropertySeeder::class,
            ChooseSeeder::class,
            ChooseItemSeeder::class,
            IndexAllTextSeeder::class,
            IndexSearchSeeder::class,
            AgentTextSeeder::class,
            BlogCategorySeeder::class,
            BlogTagSeeder::class,
            BlogPostTextSeeder::class,
            PropertyBedroomSeeder::class,
            PropertyBathroomSeeder::class,
            PropertyCountroomSeeder::class,
            PropertyParkingspaceSeeder::class,
            BlogPostSeeder::class,
            BlogPostImageSeeder::class,
            PropertyFrontendTextSeeder::class,
        ]);
    }
}
