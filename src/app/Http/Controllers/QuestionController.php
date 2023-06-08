<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use Illuminate\Support\Facades\Validator;
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
        $question_with_choices = Question::with('choices')->find($id);
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
        $question_with_choices = Question::with('choices')->find($id);
        return view('admin.edit', ['question' => $question_with_choices]);
    }

    // 問題を更新する
    public function update($id, Request $request)
    {
        // バリデーション作成
        $rules = [
            'content' => 'required|max:255',
            'supplement' => 'max:255',
            'choice1' => 'max:255',
            'choice2' => 'max:255',
            'choice3' => 'max:255',
        ];
        $messages = [
            'content.required' => '問題文を入力してください',
            'content.max' => '問題文は255文字以内で入力してください',
            'supplement.max' => '補足文は255文字以内で入力してください',
            'choice1.max' => '選択肢1は255文字以内で入力してください',
            'choice2.max' => '選択肢2は255文字以内で入力してください',
            'choice3.max' => '選択肢3は255文字以内で入力してください',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            // バリデーションエラーが発生した場合の処理
            return redirect()->back()->withErrors($validator)->withInput();
        }
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
        return redirect()->route('admin.detail', ['id' => $question->id]);
    }

    // 問題作成画面を表示する
    public function create()
    {
        return view('admin.create');
    }
    // 問題を作成する
    public function store(Request $request)
    {
        // バリデーション作成
        $rules = [
            'content' => 'required|max:255',
            'supplement' => 'max:255',
            'image' => 'required|file|image|mimes:jpeg,png,jpg|max:1024',
            'choice1' => 'required|max:255',
            'choice2' => 'required|max:255',
            'choice3' => 'required|max:255',
        ];
        $messages = [
            'content.required' => '問題文を入力してください',
            'content.max' => '問題文は255文字以内で入力してください',
            'supplement.max' => '補足文は255文字以内で入力してください',
            'image.required' => '画像を選択してください',
            'image.file' => '画像を選択してください',
            'image.image' => '画像を選択してください',
            'image.mimes' => '画像はjpeg,png,jpg形式で選択してください',
            'image.max' => '画像は1MB以内で選択してください',
            'choice1.required' => '選択肢1を入力してください',
            'choice1.max' => '選択肢1は255文字以内で入力してください',
            'choice2.required' => '選択肢2を入力してください',
            'choice2.max' => '選択肢2は255文字以内で入力してください',
            'choice3.required' => '選択肢3を入力してください',
            'choice3.max' => '選択肢3は255文字以内で入力してください',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            // バリデーションエラーが発生した場合の処理
            return redirect()->back()->withErrors($validator)->withInput();
        }
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
