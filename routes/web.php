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


Route::get('home', 'ShowController@index');

Route::get('/student ', 'StudentControler@index');
Route::get('student/create', 'StudentControler@create');
Route::post('student/create', 'StudentControler@store');
Route::get('/student/edit/{id}', 'StudentControler@edit');
Route::post('/student/edit/{id}', 'StudentControler@update');
Route::delete('/student/delete/{id}', 'StudentControler@destroy');

Route::get('/group', 'GroupController@index');
Route::get('group/create', 'GroupController@create');
Route::post('group/create', 'GroupController@store');
Route::get('/group/edit/{id}', 'GroupController@edit');
Route::post('/group/edit/{id}', 'GroupController@update');
Route::delete('/group/delete/{id}', 'GroupController@destroy');

Route::get('/discipline', 'DisciplineController@index');
Route::get('discipline/create', 'DisciplineController@create');
Route::post('discipline/create', 'DisciplineController@store');
Route::get('/discipline/edit/{id}', 'DisciplineController@edit');
Route::post('/discipline/edit/{id}', 'DisciplineController@update');
Route::delete('/discipline/delete/{id}', 'DisciplineController@destroy');
