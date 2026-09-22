<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/locale/{locale}', [HomeController::class, 'switchLocale'])->name('locale.switch');
