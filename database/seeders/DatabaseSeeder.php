<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Course;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat 10 user
        User::factory(10)->create();
    
        // Buat 5 course
        Course::factory()->count(5)->create();
    
        // Random attach course ke user
        $users = User::all();
        $courses = Course::all();
    
        foreach ($users as $user) {
            $user->courses()->attach(
                $courses->random(rand(0, 5))->pluck('id')->toArray()
            );
        }
    } 
}
