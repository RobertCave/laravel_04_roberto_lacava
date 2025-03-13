<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

// Blog list dei post
Route::get('/blog', [BlogController::class, 'list']);

//  la route per l'apertura della pagina dei dettagli 
Route::get('/articolo/{id}',[BlogController::class, 'leggi'])->name('leggi');    