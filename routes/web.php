<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\CategoryController;

Route::get('/', [BookController::class, 'index'])
    ->name('Home');

Route::get('/bookDetail/{id}', [BookController::class, 'show'])
    ->name('Book detail');

Route::get('/publisher', [PublisherController::class, 'index'])
    ->name('Publisher');

Route::get('/pubD/{id}', [PublisherController::class, 'show'])
    ->name('Publisher detail');

Route::get('/bookCategory/{id}', [CategoryController::class, 'show'])
    ->name('Book category');

Route::get('/contact', function(){
    return view('contact');
});

