<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("choices")->insert([
            'question_id' => 1,
            'name' => 'Manila',
            'valid' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'question_id' => 1,
            'name' => 'Tokyo',
            'valid' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'question_id' => 1,
            'name' => 'Osaka',
            'valid' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'question_id' => 2,
            'name' => 'London',
            'valid' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'question_id' => 2,
            'name' => 'Tokyo',
            'valid' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'question_id' => 2,
            'name' => 'New York',
            'valid' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

}
