<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/category/{id}', [PageController::class, 'category'])->name('category');
Route::get('/writers', [PageController::class, 'writers'])->name('writers');
Route::get('/writer/{id}', [PageController::class, 'writerArticle'])->name('writer.article');
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/popular', [ArticleController::class, 'popular'])->name('popular');
