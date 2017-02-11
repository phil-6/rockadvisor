<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/', function() {
    View::make('index'); // will return app/views/index.php
});


Route::get('areas',
    ['as' => 'api:Areas.index',
        'uses' => 'AreasController@api_index'
    ]
);

// API ROUTES ==================================
// Ref: https://scotch.io/tutorials/create-a-laravel-and-angular-single-page-comment-application
Route::group(array('prefix' => 'api'), function() {

    // since we will be using this just for CRUD, we won't need create and edit
    // Angular will handle both of those forms
    // this ensures that a user can't access api/create or api/edit when there's nothing there
    Route::resource('areas', 'AreasController',
        array('only' => array('api_index', 'api_store', 'api_destroy')));

});

// CATCH ALL ROUTE =============================
// all routes that are not home or api will be redirected to the frontend
// this allows angular to route them
// Ref: https://scotch.io/tutorials/create-a-laravel-and-angular-single-page-comment-application
App::missing(function($exception) {
    return View::make('api_index');
});