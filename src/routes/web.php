<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\AdminInvitationsController;
use App\Http\Controllers\AUTH\RegisteredUserController;


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



Route::get('/admin', [QuestionController::class, 'show'] )->middleware(['auth'])->name('admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// topページのルート
Route::get('/', function () {
    return view('index');
})->name('index');

// quizページのルート
Route::get('/quiz', [QuestionController::class, 'show'])->name('quiz');


// 管理者追加ページのルート
Route::get('/register', [AdminInvitationsController::class, 'index'])->middleware(['auth'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->middleware(['auth'])->name('register.store');


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/detail/{id}', [QuestionController::class, 'detail'])->name('detail');
    Route::get('/delete/{id}', [QuestionController::class, 'delete'])->name('delete');
    Route::get('/edit/{id}', [QuestionController::class, 'edit'])->name('edit');
    Route::get('/update/{id}', [QuestionController::class, 'update'])->name('update');
    Route::get('/create', function () {
        return view('admin.create');
    })->name('create');
    Route::post('/store', [QuestionController::class, 'store'])->name('store');
});


