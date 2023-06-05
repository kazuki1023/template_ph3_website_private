<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\AdminInvitationsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// topページのルート
Route::get('/', function () {
    return view('index');
})->name('index');

// quizページのルート
Route::get('/quiz', function () {
    return view('quiz');
})->name('quiz');

// 管理者ページのルート
Route::get('/admin', [QuestionController::class, 'show'] )->name('admin');

// 各問題詳細のルート
Route::get('/admin/detail/{id}', [QuestionController::class, 'detail'] )->name('admin.detail');

// 詳細画面で削除する時のルート
Route::get('/admin/delete/{id}', [QuestionController::class, 'delete'] )->name('admin.delete');

// 詳細画面で編集する時のルート
Route::get('/admin/edit/{id}', [QuestionController::class, 'edit'] )->name('admin.edit');
// 管理者ページのログインページのルート
// Route::get('/admin/login', function () {
//     return view('admin/login');
// })->name('admin.login');
