<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        User::factory()->create([
            'name' => 'Himo',
            'email' => 'himo@gmail.com',
            'password' => '',
        ]);

        User::factory()->create([
            'name' => 'Camila',
            'email' => 'camila@gmail.com',
            'password' => '',
        ]);

        User::factory()->create([
            'name' => 'Paula',
            'email' => 'paula@gmail.com',
            'password' => '',

        ]);

    }
}

