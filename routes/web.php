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

Route::get('/','BlogController@index');

/*{article} i percjell informatat qe po na duhet nje instance e klases article,duhet te quhet
sikur modeli ku me pas perdoret edhe te controlleri  me te njejtin emer*/

Route::get('/category/{id}','BlogController@category')->name('category');
Route::get('/categories','BlogController@categories')->name('categories');

Route::get('/article/{id}','BlogController@article')->name('article');
Route::get('/articles/{id}','BlogController@articles')->name('articles');

Route::get('/author/{id}','BlogController@author')->name('author');

Route::get('/contact','BlogController@contact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
