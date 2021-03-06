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

//Commented for work on pure angular front end
Route::get('/', function() {
    return View::make('main');
});

Route::get('/map', function() {
    return View::make('map');
});

Route::get('/finder', function(){
    return View::Make('finder');
});

//====================================================================
//Index Pages
//These are currently for development and lack any sort of meaningful css
//====================================================================

Route::get('/areas', function() {
    return View::make('areasIndex');
});

Route::get('/crags', function() {
    return View::make('cragsIndex');
});

Route::get('/grades', function() {
    return View::make('gradesIndex');
});

Route::get('/climbs', function() {
    return View::make('climbsIndex');
});


//====================================================================
//Horrible Static Blog Page
//====================================================================

Route::get('/blog', function() {
    return View::make('blogStatic');
});

//====================================================================
//Horrible Static Blog Page
//====================================================================
Route::get('/presentation', function(){
    return View::make('presentation');
});