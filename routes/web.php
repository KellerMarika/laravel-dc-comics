<?php
use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;



Route::get('/', [ComicController::class, 'index'])->name('comics.index');

Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');
