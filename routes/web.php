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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/stu-list', [
    'uses' => 'StudentsController@index',
    'as' => 'stu-list'
]);

Route::get('/addStu', [
    'uses' => 'StudentsController@create',
    'as' => 'addStu'
]);

Route::post('/student/add', [
    'uses' => 'StudentsController@store',
    'as' => 'student.add'
]);

Route::get('/student/edit/{id}', [
    'uses' => 'StudentsController@edit',
    'as' => 'student.edit'
]);

Route::post('/student/update/{id}', [
    'uses' => 'StudentsController@update',
    'as' => 'student.update'
]);

Route::get('/student/delete/{id}', [
    'uses' => 'StudentsController@destroy',
    'as' => 'student.delete'
]);
