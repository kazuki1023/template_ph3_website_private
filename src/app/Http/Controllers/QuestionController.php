<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models;

class QuestionController extends Controller
{
    //問題一覧を表示する
    public function show()
    {
        $questions = Question::all();
        return view('admin.index', ['questions' => $questions]);
    }

    //問題詳細を表示する
    public function detail($id)
    {
        $question = Question::find($id);
        $choices = $question->choices;
        return view('admin.detail', ['question' => $question , 'choices' => $choices]);
    }

    //問題を削除する
    public function delete($id)
    {
        $question = Question::find($id);
        $question->delete();
        return redirect()->route('admin');
    }

    //問題を編集する
    public function edit($id)
    {
        $question = Question::find($id);
        return view('admin.edit', ['question' => $question]);
    }
}
