<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Example user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Seed 100 students
        Student::factory(100)->create();

        // Call ProfessorSeeder (will insert 10 fake professors)
        $this->call([
            ProfessorSeeder::class,
        ]);
    }
}
