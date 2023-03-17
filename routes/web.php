<?php

use App\Http\Controllers\HalamanController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard',[HalamanController::class, 'index']);

Route::get('/profile',[HalamanController::class, 'profile']);

Route::get('/MyDiary',[HalamanController::class, 'MyDiary']);

Route::get('/contact-us',[HalamanController::class, 'contact']);

Route::get('/data_mahasiswa', [HalamanController::class, 'data_mahasiswa']);