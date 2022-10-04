<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('photos', [PagesController::class, 'photos'])->name('photos');
Route::get('music', [PagesController::class, 'music'])->name('music');
Route::get('portfolio', [PagesController::class, 'portfolio'])->name('portfolio');
Route::get('photosArchive', [PagesController::class, 'photosArchive'])->name('photosArchive');

Route::get('login', [AuthController::class, 'index'])->name('login.index');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
