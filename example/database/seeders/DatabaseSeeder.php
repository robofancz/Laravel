<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Job;
use App\Models\Tag;
use App\Models\Employer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'test@example.com',
        ]);

        Job::factory(10)->has(Tag::factory())->create();
        Job::factory(10)->has(Tag::factory())->create();

        Employer::factory(50)->create();

        // Tag::factory(20)->has(Job::factory())->create();
    }
}
