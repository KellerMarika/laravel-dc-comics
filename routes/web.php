<?php
use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;


/* Route::get(' uri, [   Xcontroller::class,   function   ]')->name (' nome-rotta = percorso-view   ')*/
Route::get('/', [ComicController::class, 'index'])->name('comics.index');


Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');


Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');


Route::post("/comics", [ComicController::class, "store"])->name("comics.store");