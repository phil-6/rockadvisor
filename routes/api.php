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

Route::get('areas', 			    'AreasController@api_index');
Route::get('areas/{areaId}', 	    'AreasController@api_show');
Route::post('areas', 			    'AreasController@api_store');
Route::post('areas/{areaId}', 		'AreasController@api_update');
Route::delete('areas/{areaId}', 	'AreasController@api_destroy');

Route::get('crags', 			    'CragsController@api_index');
Route::get('crags/{cragId}', 	    'CragsController@api_show');
Route::post('crags', 			    'CragsController@api_store');
Route::post('crags/{cragId}', 		'CragsController@api_update');
Route::delete('crags/{cragId}', 	'CragsController@api_destroy');

Route::get('climbs', 			    'ClimbsController@api_index');
Route::get('climbs/{climbId}', 	    'ClimbsController@api_show');
Route::post('climbs', 			    'ClimbsController@api_store');
Route::post('climbs/{climbId}', 	'ClimbsController@api_update');
Route::delete('climbs/{climbId}', 	'ClimbsController@api_destroy');

Route::get('grades', 			    'gradesController@api_index');


//Routes for maps api
Route::get('maps_crags',            'MapController@map_api_getAllCrags');