<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/{post}', [PostController::class, "show"])->name('posts.show');
Route::get('/posts', [PostController::class, "index"])->name('posts.index');
Route::view('/about', 'about')->name('about.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
