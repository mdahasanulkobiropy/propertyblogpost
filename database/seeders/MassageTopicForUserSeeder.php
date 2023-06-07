<?php

namespace Database\Seeders;

use App\Models\MassageTopicForUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MassageTopicForUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MassageTopicForUser::insert([
            'topic' => 'Customer support / feedback',
        ]);
        MassageTopicForUser::insert([
            'topic' => 'Applying',
        ]);
        MassageTopicForUser::insert([
            'topic' => 'Press',
        ]);
        MassageTopicForUser::insert([
            'topic' => 'Listings',
        ]);
        MassageTopicForUser::insert([
            'topic' => 'Partnerships',
        ]);
        MassageTopicForUser::insert([
            'topic' => 'General questions',
        ]);
    }
}
