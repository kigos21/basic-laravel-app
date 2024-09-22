<?php

namespace Database\Seeders;

use App\Models\Blog;
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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin',
            'role' => 'admin'
        ]);

        $blogs = [
            [
                'title' => 'Sunset Serenity',
                'description' => 'A beautiful sunset over the ocean with vibrant colors.',
                'date' => '2024-09-20',
            ],
            [
                'title' => 'Mountain Escape',
                'description' => 'An adventurous trip through the mountains with stunning views.',
                'date' => '2024-08-15',
            ],
            [
                'title' => 'City Lights',
                'description' => 'Exploring the nightlife in a bustling city filled with energy.',
                'date' => '2024-07-10',
            ],
            [
                'title' => 'Forest Tranquility',
                'description' => 'A peaceful walk through the forest with calming nature sounds.',
                'date' => '2024-06-05',
            ],
            [
                'title' => 'Desert Mirage',
                'description' => 'A surreal journey through the desert with endless sand dunes.',
                'date' => '2024-05-25',
            ],
            [
                'title' => 'Ocean Waves',
                'description' => 'A day spent relaxing by the beach, listening to the waves crash.',
                'date' => '2024-04-12',
            ],
        ];


        // Insert the data into the 'artworks' table
        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}
