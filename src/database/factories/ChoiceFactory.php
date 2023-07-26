<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Choice>
 */
class ChoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $index = 3;
        return [
            'question_id' => $index++,
            'name' => fake()->text(),
            'valid' => fake()->randomElement([0, 0, 1]), 
        ];
    }
}
