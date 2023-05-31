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



// topページのディレクトリ
Route::get('/', function () {
    return view('index');
})->name('index');

// quizページのディレクトリ
Route::get('/quiz', function () {
    return view('quiz');
})->name('quiz');

// 管理者ページのディレクトリ
Route::get('/admin', [QuestionController::class, 'show'] )->name('admin');

// 管理者ページのログインページのディレクトリ
// Route::get('/admin/login', function () {
//     return view('admin/login');
// })->name('admin.login');
