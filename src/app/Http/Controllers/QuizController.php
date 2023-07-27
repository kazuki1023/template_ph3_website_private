<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuizController extends Controller
{
    public function show() {
        $questions = Question::paginate(20);
        return view('quiz', ['question' => $questions]);
    }
}
