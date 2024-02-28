<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::view('/', 'welcome');

Route::view('dashboard', 'pages.dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('customer', 'pages.customer')
    ->middleware(['auth', 'verified'])
    ->name('customer');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
    
Route::view('fakeData', 'pages.seeders')
    ->middleware(['auth'])
    ->name('fakeData');

require __DIR__.'/auth.php';
