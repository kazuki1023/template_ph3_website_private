<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models;

class QuestionController extends Controller
{
    //
    public function show()
    {
        $questions = Question::find(1)->choices();
        return view('admin.index', ['questions' => $questions]);
    }
}
