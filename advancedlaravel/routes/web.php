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

/*
Route::namespace('Web')->group(function(){
    Route::resource('teams','TeamController');
    Route::get('/teams/{team}/title', function(\App\Team $team){
        return response()->jTitle($team);
    });
});
*/

Route::group(['namespace' => 'Web','prefix' => 'testing'],function(){
    Route::resource('teams','TeamController');
    Route::get('/teams/{team}/title', function(\App\Team $team){
        return response()->jTitle($team);
    });
});

