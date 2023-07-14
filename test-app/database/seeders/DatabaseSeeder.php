<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(6)->create();

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'test@example.com',
        //     'website' => 'www.xample.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore eos consequatur perferendis corporis quasi repudiandae necessitatibus minus, minima sapiente. Officiis a debitis qui et, dolorum asperiores quam culpa quos repellat tempora totam aliquid voluptatem? Beatae saepe distinctio a tenetur natus, illum nulla blanditiis odit dolore magnam molestias, tempora consectetur neque.',
        // ]);
        // Listing::create([
        //     'title' => 'FullStack Developer',
        //     'tags' => 'PHP, laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'test@example.com',
        //     'website' => 'www.xample.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore eos consequatur perferendis corporis quasi repudiandae necessitatibus minus, minima sapiente. Officiis a debitis qui et, dolorum asperiores quam culpa quos repellat tempora totam aliquid voluptatem? Beatae saepe distinctio a tenetur natus, illum nulla blanditiis odit dolore magnam molestias, tempora consectetur neque.',
        // ]);
    }
}
