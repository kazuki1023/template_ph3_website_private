<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Testing\Fakes\Fake;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call( 
            [
                QuestionSeeder::class,
                ChoiceSeeder::class,
                AdminSeeder::class,
                AdminInvitationsSeeder::class,
                UserSeeder::class,
                FakeQuestionSeeder::class,
            ]);
    }
}
