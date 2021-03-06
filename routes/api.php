<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| Helper text from Laravel Framework
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//CRUD for Areas
Route::get('areas', 			    'AreasController@api_index');
Route::get('areas/{areaId}', 	    'AreasController@api_show');
Route::post('areas', 			    'AreasController@api_store');
Route::post('areas/{areaId}', 		'AreasController@api_update');
Route::delete('areas/{areaId}', 	'AreasController@api_destroy');

//CRUD for Crags
Route::get('crags', 			    'CragsController@api_index');
Route::get('crags/{cragId}', 	    'CragsController@api_show');
Route::post('crags', 			    'CragsController@api_store');
Route::post('crags/{cragId}', 		'CragsController@api_update');
Route::delete('crags/{cragId}', 	'CragsController@api_destroy');

//CRUD for Climbs
Route::get('climbs', 			    'ClimbsController@api_index');
Route::get('climbs/{climbId}', 	    'ClimbsController@api_show');
Route::post('climbs', 			    'ClimbsController@api_store');
Route::post('climbs/{climbId}', 	'ClimbsController@api_update');
Route::delete('climbs/{climbId}', 	'ClimbsController@api_destroy');

//Show all and show details for grades
Route::get('grades', 			    'GradesController@api_index');
Route::get('grades/{gradeId}',      'GradesController@api_show');

//Index for Rock Types and Orientations
Route::get('orientations', 		    'OrientationsController@api_index');
Route::get('rockTypes', 			'RockTypesController@api_index');

//====================================================================
//Custom api routes
//====================================================================
//Crag Details
//Get ClimbTypeIdsAndNames - Used in Map
Route::get('crags/{cragId}/type',   'CragsController@api_climbTypeIdsAndNames');
//Get Grades at Crag - Used in Map
Route::get('crags/{cragId}/grades', 'CragsController@api_getGradesAtCrag');
//Get Climbs at Crag - Used in add climb form.
Route::get('crags/{cragId}/climbs', 'CragsController@api_getClimbsAtCrag');

//Area Details
//Get Crags at Area
Route::get('areas/{areaId}/crags',  'AreasController@api_getCragsAtArea');
//Get Child Areas
Route::get('areas/{areaId}/areas',  'AreasController@api_getChildAreas');

//Routes for maps api
Route::get('maps_crags',            'MapController@map_api_getAllCrags');

//EMAILS!
Route::post('/sendMail',            'EmailController@send');

//====================================================================
//App api routes
//====================================================================

Route::get('app/areas',            'AreasController@app_api_index');
Route::get('app/crags',            'CragsController@app_api_index');
Route::get('app/climbs',           'ClimbsController@app_api_index');
Route::get('app/lastUpdateTime',     'AppController@app_api_lastUpdateTime');
