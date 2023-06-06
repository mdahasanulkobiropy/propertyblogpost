<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Property::insert([
            'title' => 'Beautiful House in Marina',
            'location' => '542 29th Avenue, Marina District, San Francisco, CA 94121',
            'description' => 'Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space. The second bedroom is...',
            'image' => '1.jpg',
            'year_built' => '1980',
            'price' => '1198000',
            'color' => '#4287f5',
            'bedroom_id' => '1',
            'bathroom_id' => '1',
            'countroom_id' => '2',
            'parkingspace_id' => '2',
            'button_text' =>'view details',
            'area' => '1045',
            'stories' => '23',
            'featured_id' => '1',
            'status_id' => '1',
            'agent_id' => '3',
            'post_status' => '1',
            'creator_id' => '1',
            'approver_id' => '1',
        ]);
        Property::insert([
            'title' => 'Beautiful House in Marina',
            'location' => '542 29th Avenue, Marina District, San Francisco, CA 94121',
            'description' => 'Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space. The second bedroom is...',
            'image' => '2.jpg',
            'year_built' => '1980',
            'price' => '2198000',
            'color' => '#49515e',
            'bedroom_id' => '2',
            'bathroom_id' => '2',
            'countroom_id' => '3',
            'parkingspace_id' => '2',
            'button_text' =>'view details',
            'area' => '2045',
            'stories' => '23',
            'featured_id' => '2',
            'status_id' => '2',
            'agent_id' => '4',
            'post_status' => '1',
            'creator_id' => '1',
            'approver_id' => '1',
        ]);
        Property::insert([
            'title' => 'Beautiful House in Marina',
            'location' => '542 29th Avenue, Marina District, San Francisco, CA 94121',
            'description' => 'Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space. The second bedroom is...',
            'image' => '3.jpg',
            'year_built' => '1980',
            'price' => '3198000',
            'color' => '#40114d',
            'bedroom_id' => '3',
            'bathroom_id' => '3',
            'countroom_id' => '4',
            'parkingspace_id' => '2',
            'button_text' =>'view details',
            'area' => '3045',
            'stories' => '23',
            'featured_id' => '3',
            'status_id' => '3',
            'agent_id' => '5',
            'post_status' => '1',
            'creator_id' => '1',
            'approver_id' => '1',
        ]);
        Property::insert([
            'title' => 'Beautiful House in Marina',
            'location' => '542 29th Avenue, Marina District, San Francisco, CA 94121',
            'description' => 'Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space. The second bedroom is...',
            'image' => '4.jpg',
            'year_built' => '1980',
            'price' => '5198000',
            'color' => '#db1f2e',
            'bedroom_id' => '4',
            'bathroom_id' => '4',
            'countroom_id' => '5',
            'parkingspace_id' => '2',
            'area' => '4045',
            'stories' => '23',
            'button_text' =>'view details',
            'featured_id' => '4',
            'status_id' => '1',
            'agent_id' => '6',
            'post_status' => '1',
            'creator_id' => '1',
            'approver_id' => '1',
        ]);
        Property::insert([
            'title' => 'Beautiful House in Marina',
            'location' => '542 29th Avenue, Marina District, San Francisco, CA 94121',
            'description' => 'Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space. The second bedroom is...',
            'image' => '5.jpg',
            'year_built' => '1980',
            'price' => '4198000',
            'color' => '#9c283a',
            'bedroom_id' => '5',
            'bathroom_id' => '4',
            'countroom_id' => '6',
            'parkingspace_id' => '2',
            'area' => '5045',
            'button_text' =>'view details',
            'stories' => '23',
            'featured_id' => '1',
            'status_id' => '2',
            'agent_id' => '7',
            'post_status' => '1',
            'creator_id' => '1',
            'approver_id' => '1',
        ]);
        Property::insert([
            'title' => 'Beautiful House in Marina',
            'location' => '542 29th Avenue, Marina District, San Francisco, CA 94121',
            'description' => 'Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space. The second bedroom is...',
            'image' => '6.jpg',
            'year_built' => '1980',
            'price' => '6198000',
            'color' => '#694452',
            'bedroom_id' => '2',
            'bathroom_id' => '1',
            'countroom_id' => '2',
            'parkingspace_id' => '2',
            'area' => '6045',
            'stories' => '23',
            'button_text' =>'view details',
            'featured_id' => '2',
            'status_id' => '3',
            'agent_id' => '8',
            'post_status' => '1',
            'creator_id' => '1',
            'approver_id' => '1',
        ]);

    }
}
