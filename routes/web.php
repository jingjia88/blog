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

Route::get('/', 'HomeController@index');
Route::get('/article/{id}','ArticleController@show');
Route::post('comment', 'CommentController@store');


Route::get('/login/{social}','Auth\LoginController@socialLogin');
Route::get('/login/{social}/callback','Auth\LoginController@handleProviderCallback');
              

Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::get('/', 'HomeController@index');
    Route::resource('article', 'ArticleController');
    Route::resource('comment','CommentController');
});

