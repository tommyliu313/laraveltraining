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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function(){
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/instructor/dashboard', function(){
    return view('member.dashboard');
})->middleware(['auth'])->name('member.dashboard');

Route::get('/admin/dashboard', function(){
    return view('admin.dashboard');
})->middleware(['auth'])->name('admin.dashboard');

Route::middleware('auth')->group(function(){
    Route::get('/profile',[ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile',[ProfileController::class, 'update'])->name('profile.update');
});