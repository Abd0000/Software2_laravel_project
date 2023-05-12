<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\department;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        department::create([
            'name' => 'Information system',
            'code' => 'IS',
         ]);
        department::create([
            'name' => 'information Technology',
            'code' => 'IT',
         ]);
        department::create([
            'name' => 'Computer Science',
            'code' => 'CS',
         ]);
    }
}
