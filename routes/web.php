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
    return view('user/home');
});


Route::get('/signup', function(){
    return view('user/signup');
});

Route::get('/signin', function(){
    return view('user/signin');
});

Route::get('/liblaries', function() {
    return view('user/liblaries');
});

Route::get('/analytics', function () {
    return view('analytics/analytics');
});

