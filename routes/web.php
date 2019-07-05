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


Route::get('/student', 'StudentControler@index');
Route::get('/create', 'StudentControler@create');
Route::post('/create', 'StudentControler@store');
Route::get('/student/edit/{id}', 'StudentControler@edit');
Route::post('/student/edit/{id}', 'StudentControler@update');
Route::delete('/student/delete/{id}', 'StudentControler@destroy');

Route::get('group/create', 'GroupController@create');
Route::post('group/create', 'GroupController@store');

Route::get('discipline/create', 'DisciplineController@create');
Route::post('discipline/create', 'DisciplineController@store');

Route::get('evaluation/create', 'EvaluationController@create');
Route::post('evaluation/create', 'EvaluationController@store');
