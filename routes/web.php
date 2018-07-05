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

Route::get('/', 'ArticlesController@index');
Route::get('/articles', 'ArticlesController@listArticle');
Route::get('/articles/create', 'ArticlesController@createArticle');
Route::get('/articles/edit/{id}', 'ArticlesController@editArticle');
Route::get('/articles/delete/{id}', 'ArticlesController@delete');
Route::post('/articles/create', 'ArticlesController@postArticle');
Route::post('/articles/edit/{id}', 'ArticlesController@editRequest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
