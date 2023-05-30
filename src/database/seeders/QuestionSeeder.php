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
        DB::table('questions')->insert([
            'content' => 'What is the biggest city of the Philippines?',
            'image' => "sample.png",
            'supplement' => 'Manila is the second biggest city of the Philippines.',
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'content' => 'What is the biggest city of the Japan?',
            'image' => "sample.png",
            'supplement' => 'Osaka is the second biggest city of the Japan.',
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'content' => 'What is the biggest city of the China?',
            'image' => "sample.png",
            'supplement' => '上海 is the second biggest city of the China.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
