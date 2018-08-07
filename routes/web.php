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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('category/create', ['as' => 'category.create', 'uses' => 'Admin\CategoryController@create']);
Route::get('category', ['as' => 'category.index', 'uses' => 'Admin\CategoryController@index']);
Route::post('category/store', ['as' => 'category.store', 'uses' => 'Admin\CategoryController@store']);
/*Updating Category*/
Route::get('category/update/{id}', ['as' => 'category.update', 'uses' => 'Admin\CategoryController@update']);

Route::post('category/edit/{id}', ['as' => 'category.edit', 'uses' => 'Admin\CategoryController@edit']);
//deleting category
Route::get('category/delete/{id}',['as' => 'category.delete', 'uses' => 'Admin\CategoryController@destroy']);