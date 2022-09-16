<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('photos', [PagesController::class, 'photos'])->name('photos');
Route::get('music', [PagesController::class, 'music'])->name('music');
Route::get('portfolio', [PagesController::class, 'portfolio'])->name('portfolio');