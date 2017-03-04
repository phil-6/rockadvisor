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

//====================================================================
//Index Pages
//These are currently for development and lack any sort of meaningful css
//====================================================================

Route::get('/finder', function(){
    return View::Make('finder');
});

/*Route::get('/areas', function() {
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
});*/

//====================================================================
//Detail Pages
//Definate work in progress
//====================================================================
/*Route::get('/crags/{cragId}', function() {
    return View::make('cragDetail');
});*/

//====================================================================
//Horrible Static Blog Page
//====================================================================

/*Route::get('/blog', function() {
    return View::make('blogStatic');
});*/