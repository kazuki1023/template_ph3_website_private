<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/admin', function () {
    return view('admin/index');
})->name('admin');
