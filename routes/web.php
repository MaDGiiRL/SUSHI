<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/menu', [PublicController::class, 'menu'])->name('menu');
Route::get('/all', [PublicController::class, 'all'])->name('all');

Route::get('/contact-us', [PublicController::class, 'contact_us'])->name('contact_us');