<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $questions = [
            [
                'content' => 'What is the biggest city of the Philippines?',
                'image' => "sample.png",
                'supplement' => 'Manila is the second biggest city of the Philippines.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content' => 'What is the biggest city of Japan?',
                'image' => "sample.png",
                'supplement' => 'Osaka is the second biggest city of Japan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('questions')->insert($questions);
    }
}
