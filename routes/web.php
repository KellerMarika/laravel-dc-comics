<?php
use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;



Route::get('/', [ComicController::class, 'index'])->name('comics.home');
