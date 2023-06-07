<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Choice;

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
        $question_with_choices=Question::with('choices')->find($id);
        return view('admin.detail', ['question' => $question_with_choices]);
    }

    //問題を削除する
    public function delete($id)
    {
        $question = Question::find($id);
        $question->delete();
        session()->flash("successDelete", "問題の削除に成功しました");
        return redirect()->route('admin');
    }

    //問題を編集する
    public function edit($id)
    {
        $question = Question::find($id);
        $question_with_choices=Question::with('choices')->find($id);
        return view('admin.edit', ['question' => $question_with_choices]);
    }

    // 問題を更新する
    public function update($id, Request $request)
    {
        $question = Question::find($id);
        $question->content = $request->content;
        $question->supplement = $request->supplement;
        // 画像をアップロード
        $heroImage = $request->file("image");

        if ($heroImage) {
            $dirPathHero = storage_path("app/public/img/questions");
            if (!File::exists($dirPathHero)) {
                File::makeDirectory($dirPathHero, 0777, true);
            }

            $imageExtension = $heroImage->getClientOriginalExtension();
            $imagePathHero =  uniqid() . "." . $imageExtension;
            Storage::disk('public')->put("img/questions/" . $imagePathHero, File::get($heroImage));

            // 保存した画像パスをデータベースに保存
            $question->image = $imagePathHero;
        }
        $question->save();

        $choices = $question->choices;
        foreach ($choices as $choice) {
            $choice->name = $request->input('choice' . $choice->id);
            $choice->valid = $choice->id == $request->input('list-radio') ? 1 : 0;
            $choice->save();
        }
        session()->flash('successUpdate', '問題の更新に成功しました');
        // 詳細ページにリダイレクト
        return redirect()->route('admin.detail', ['id' => $id]);
    }

    // 問題作成画面を表示する
    public function create()
    {
        return view('admin.create');
    }
    // 問題を作成する
    public function store(Request $request)
    {
        $question = new Question();
        $question->content = $request->content;
        $question->supplement = $request->supplement;
        // 画像をアップロード
        $heroImage = $request->file("image");

        if ($heroImage) {
            $dirPathHero = storage_path("app/public/img/questions");
            if (!File::exists($dirPathHero)) {
                File::makeDirectory($dirPathHero, 0777, true);
            }

            $imageExtension = $heroImage->getClientOriginalExtension();
            $imagePathHero =  uniqid() . "." . $imageExtension;
            Storage::disk('public')->put("img/questions/" . $imagePathHero, File::get($heroImage));

            // 保存した画像パスをデータベースに保存
            $question->image = $imagePathHero;
        }
        $question->save();

        $choices = [];
        $selectedChoiceId = $request->input('list-radio');
        for ($i = 1; $i <= 3; $i++) {
            $choice = new Choice();
            $choice->question_id = $question->id;
            $choice->name = $request->input('choice' . $i);
            $choice->valid = ($i == $selectedChoiceId) ? 1 : 0;
            $choice->save();
            $choices[] = $choice;
        }
        session()->flash('successCreate', '問題の作成に成功しました');
        return redirect()->route('admin', ['question' => $question, 'choices' => $choices]);
    }
}
