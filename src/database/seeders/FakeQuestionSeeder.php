<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Choice;

class FakeQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::factory(100)->create()->each(function ($question) {
            // ランダムに正解の選択肢の位置を決定
            $validPosition = rand(0, 2);

            for ($i = 0; $i < 3; $i++) {
                // 決定した位置の時だけvalidを1に、それ以外は0に設定
                $valid = $i === $validPosition ? 1 : 0;

                Choice::factory()->create(['question_id' => $question->id , 'valid' => $valid]);
            }
        });
    }
}
