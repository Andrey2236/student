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


Route::get('home', 'ShowController@index')->name('home');

Route::prefix('student')->name('student.')->group(function () {
    Route::get('/', 'StudentControler@index')->name('index');
    Route::get('create', 'StudentControler@create')->name('create');
    Route::post('create', 'StudentControler@store')->name('store');
    Route::get('edit/{student}', 'StudentControler@edit')->name('edit');
    Route::post('edit/{student}', 'StudentControler@update')->name('update');
    Route::delete('delete/{student}', 'StudentControler@destroy')->name('destroy');
});

Route::prefix('group')->name('group.')->group(function () {
    Route::get('/', 'GroupController@index')->name('index');
    Route::get('create', 'GroupController@create')->name('create');
    Route::post('create', 'GroupController@store')->name('store');
    Route::get('edit/{group}', 'GroupController@edit')->name('edit');
    Route::post('edit/{group}', 'GroupController@update')->name('update');
    Route::delete('delete/{group}', 'GroupController@destroy')->name('destroy');
});

Route::prefix('discipline')->name('discipline.')->group(function () {
    Route::get('/', 'DisciplineController@index')->name('index');
    Route::get('create', 'DisciplineController@create')->name('create');
    Route::post('create', 'DisciplineController@store')->name('store');
    Route::get('edit/{disciplines}', 'DisciplineController@edit')->name('edit');
    Route::post('edit/{disciplines}', 'DisciplineController@update')->name('update');
    Route::delete('delete/{disciplines}', 'DisciplineController@destroy')->name('destroy');
});

Route::prefix('evaluation')->name('evaluation.')->group(function () {
    Route::get('create', 'EvaluationController@create')->name('create');
    Route::post('create', 'EvaluationController@store')->name('store');
});