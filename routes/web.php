<?php
use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;


/* Route::get(' uri, [   Xcontroller::class,   function   ]')->name (' nome-rotta = percorso-view   ')*/
Route::get('/', [ComicController::class, 'index'])->name('comics.index');


Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');


Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

/* come product (non la home ma la lista intera) */
Route::post("/comics", [ComicController::class, "store"])->name("comics.store");

Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name("comics.edit");


/* come show cambia il metodo */
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');


/* come show cambia il metodo*/
Route::delete('/comics/{comic}', [ComicController::class, 'destroy'])->name('comics.destroy');