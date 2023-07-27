<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Choice;

class QuizController extends Controller
{
    public function show() {
        $questions = Question::with('choices')->get();
        return view('quiz', ['questions' => $questions]);
    }
}
