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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home',['name' => "Shruti" ]);
});

Route::get('/test', function(){
    return "<h1>Welcome</h1>";
});

Route::get('/anotherhome', function () {
    return view('anotherhome',['name' => "Shruti" ]);
});