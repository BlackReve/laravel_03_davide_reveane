<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/chi-siamo', [PublicController::class, 'chiSiamo'])->name('chiSiamo');

Route::get('/chi-siamo-detail/{name}', [PublicController::class, 'chiSiamoDetail'])->name('chiSiamoDetail');

Route::get('/contatti', [PublicController::class, 'contatti'])->name('contacts');

Route::get('/books', [BookController::class, 'booksList'])->name('book.list');

Route::get('/books/details/{id}', [BookController::class, 'booksDetail'])->name('books.details');
