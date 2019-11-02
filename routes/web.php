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

Route::post('tasks/{task}/steps/allcomputed',['uses'=>'stepController@allComputed','as'=>'step.allcomputed']); 
Route::delete('tasks/{task}/steps/clearcomputed',['uses'=>'stepController@clearComputed','as'=>'step.clearcomputed']); 

Route::resource('tasks', 'TasksController');
Route::post('/tasks/{task}/check',['uses'=>'TasksController@check','as'=>'tasks.check']);

 Route::resource('economic_central_banks', 'Economic_central_banksController'); 


Route::resource('tasks.steps', 'stepController'); /* 嵌套路由 */