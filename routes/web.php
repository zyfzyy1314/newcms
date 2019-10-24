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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
#Route::post('projects','ProjectsController@store')->name('projects.store');

Route::get('/', 'ProjectsController@index')->name('projects.index');

Route::post('projects',['uses'=>'ProjectsController@store','as'=>'projects.store']);

Route::match(['delete'],'/projects/{project}', [
    'as' => 'projects.destroy', 'uses' => 'ProjectsController@destory'
]);

Route::match(['PATCH'],'/projects/{project}', [
    'as' => 'projects.update', 'uses' => 'ProjectsController@update'
]);

Route::get('/projects/{project}',['uses'=>'ProjectsController@show','as'=>'projects.show']);

Route::resource('tasks', 'TasksController');