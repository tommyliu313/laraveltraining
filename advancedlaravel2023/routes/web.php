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
})->middleware(['auth','role:'])->name('dashboard');

Route::get('/instructor/dashboard', function(){
    return view('member.dashboard');
})->middleware(['auth','role:'])->name('member.dashboard');


Route::resource('/instructor/schedule', ScheduledClassController::class)
    ->only(['index','create','store','destroy'])
    ->middleware(['auth','role:instructor']);

Route::get('/admin/dashboard', function(){
    return view('admin.dashboard');
})->middleware(['auth','role:'])->name('admin.dashboard');

Route::middleware('auth')->group(function(){
    Route::get('/profile',[ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile',[ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile',[ProfileController::class, 'delete'])->name('profile.delete');
});