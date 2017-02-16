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





Route::get('areas',
    ['as' => 'api:Areas.index',
        'uses' => 'AreasController@api_index'
    ]
);

Route::get('/api/v1/areas/{id?}', 'areas@api_index');
Route::post('/api/v1/areas', 'areas@api_store');
Route::post('/api/v1/areas/{id}', 'areas@api_update');
Route::delete('/api/v1/areas/{id}', 'areas@api_destroy');