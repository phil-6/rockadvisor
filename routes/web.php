<?php

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

Route::get('/', function() {
    return View::make('main');
});

Route::get('/map', function() {
    return View::make('map');
});

Route::get('/areas', function() {
    return View::make('areasIndex');
});