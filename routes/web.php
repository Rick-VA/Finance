<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/', \App\Http\Controllers\WelcomeController::class );
Route::resource('/income', \App\Http\Controllers\IncomeController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/graphs', function () {
    return view('Graphs');
})->middleware(['auth'])->name('Graphs');

Route::get('/categories', function () {
    return view('categories');
})->middleware(['auth'])->name('categories');

require __DIR__.'/auth.php';
