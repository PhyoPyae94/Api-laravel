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

Route::get('/students', [
    'uses' => 'StudentsController@showAll',
    'as' => 'students'
] );

Route::get('/students/{id}', [
    'uses' => 'StudentsController@eachID',
    'as' => 'students'
]);

Route::get('/users', [
    'uses' => 'TestsController@allUsers',
    'as' => 'users'
]);

Route::get('/users/{id}', [
    'uses' => 'TestsController@eachUsers',
    'as' => 'users'
]);

