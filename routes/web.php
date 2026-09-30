<?php

use App\Http\Controllers\DestinationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DestinationController::class, 'home'])->name('home');
Route::get('/destinos', [DestinationController::class, 'index'])->name('destinations.index');
Route::get('/destinos/{slug}', [DestinationController::class, 'show'])->name('destinations.show');
