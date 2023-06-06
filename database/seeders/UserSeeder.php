<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678'),
            'role' => 'admin'
        ]);
        User::insert([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('12345678'),
            'role' => 'user'
        ]);
        User::insert([
            'name' => 'Scott Goodwin',
            'email' => 'agent1@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'agent'
        ]);
        User::insert([
            'name' => 'Alayna Becker',
            'email' => 'agent2@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'agent'
        ]);
        User::insert([
            'name' => 'Melvin Blackwell',
            'email' => 'agent3@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'agent'
        ]);
        User::insert([
            'name' => 'Erika Tillman',
            'email' => 'agent4@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'agent'
        ]);
        User::insert([
            'name' => 'Scott Goodwin',
            'email' => 'agent5@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'agent'
        ]);
        User::insert([
            'name' => 'Alayna Becker',
            'email' => 'agent6@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'agent'
        ]);
        User::insert([
            'name' => 'Melvin Blackwell',
            'email' => 'agent7@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'agent'
        ]);
        User::insert([
            'name' => 'Erika Tillman',
            'email' => 'agent8@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'agent'
        ]);
    }
}
