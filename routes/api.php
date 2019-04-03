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

/** user por id */
Route::get('user/{id}','UserController@show')->name('user_show');

/**todos los usuarios */
Route::get('users','UserController@index')->name('user_show');

/** registro de usuarios */
Route::post('user','UserController@store')->name('user_storage');

/** skill que tiene usuario */
Route::get('user/skill/{id}','UserSkillController@show');

/** registro de skill */
Route::post('skill','SkillController@store');

/** listado de skill */
Route::get('skills','SkillController@index');

/** registro de skill a usuarios */
Route::post('user/skill','UserSkillController@store');


