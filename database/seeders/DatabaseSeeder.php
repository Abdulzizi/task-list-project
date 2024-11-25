<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Task::factory(20)->create();

        $taskExamples = [
            ['title' => 'Cleaning room', 'description' => 'Clean the entire room', 'long_description' => 'Dust, vacuum, and organize items in the room.', 'is_completed' => false],
            ['title' => 'Grocery shopping', 'description' => 'Buy groceries', 'long_description' => 'Purchase weekly groceries including fruits, vegetables, and dairy products.', 'is_completed' => false],
            ['title' => 'Study for exams', 'description' => 'Prepare for upcoming exams', 'long_description' => 'Review notes and practice past exam papers for the math exam.', 'is_completed' => false],
            ['title' => 'Exercise', 'description' => 'Go for a run', 'long_description' => 'Run 5 kilometers in the park to stay fit and healthy.', 'is_completed' => true],
            ['title' => 'Cooking dinner', 'description' => 'Prepare a healthy meal', 'long_description' => 'Cook a balanced meal with chicken, rice, and vegetables.', 'is_completed' => false],
            ['title' => 'Laundry', 'description' => 'Do the laundry', 'long_description' => 'Wash, dry, and fold clothes for the week.', 'is_completed' => true],
            ['title' => 'Read a book', 'description' => 'Read a novel', 'long_description' => 'Read "To Kill a Mockingbird" for leisure and improve vocabulary.', 'is_completed' => false],
            ['title' => 'Gardening', 'description' => 'Water the plants', 'long_description' => 'Water all the plants in the garden and remove weeds.', 'is_completed' => false],
            ['title' => 'Call family', 'description' => 'Catch up with family', 'long_description' => 'Call parents to discuss weekend plans and check on their well-being.', 'is_completed' => false],
            ['title' => 'Clean the kitchen', 'description' => 'Tidy up the kitchen', 'long_description' => 'Wash dishes, wipe counters, and mop the kitchen floor.', 'is_completed' => true],
        ];

        foreach ($taskExamples as $taskData) {
            Task::create($taskData);
        }

        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
