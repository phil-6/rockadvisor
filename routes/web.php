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

Route::get('/', 'PagesController@root');

Route::get('home',                ['as'=>'home', 'uses' => 'PagesController@home']);

Route::get('areas',		          ['as' => 'Areas.index',        'uses' => 'AreasController@index']);
# Route::get('areas/create',        ['as' => 'Areas.create',       'uses' => 'AreasController@create']);
# Route::post('areas',	          ['as' => 'Areas.store',        'uses' => 'AreasController@store']);
# Route::get('areas/{areaId}',      ['as' => 'Areas.show',         'uses' => 'AreasController@show']);#
# Route::get('areas/{areaId}/edit', ['as' => 'Areas.edit',         'uses' => 'AreasController@edit']);
# Route::patch('areas/{areaId}',    ['as' => 'Areas.update',       'uses' => 'AreasController@update']);
# Route::delete('areas/{areaId}',	  ['as' => 'Areas.destroy',      'uses' => 'AreasController@destroy']);
