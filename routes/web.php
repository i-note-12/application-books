<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterBookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 一覧画面
Route::get('book/index', [RegisterBookController::class, 'index'])->name('book.index');
// 新規作成
Route::get('book/create', [RegisterBookController::class, 'create'])->name('book.create');
Route::post('book/store', [RegisterBookController::class, 'store'])->name('book.store');
Route::get('/create-2', [RegisterBookController::class, 'createBook'])->name('book.create-book');
Route::post('/create-2', [RegisterBookController::class, 'add'])->name('book.add-book');

require __DIR__.'/auth.php';
