<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ArticleController::class, 'index'])->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/admin', 'auth.login'); // admin login

Route::prefix('article')->group(function () { // article prefix

  Route::middleware('auth')->group(function () { // admin routes

    Route::get('/create', [ArticleController::class, 'create'])->name('article.create');
    Route::get('/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit');
  });

  Route::get('/{article}', [ArticleController::class, 'show'])->name('article.show');
});

require __DIR__ . '/auth.php';
