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
    return view('layouts/app');
});
//Adding the route of pages
Route::get('/','PostsController@index');
Route::get('/about','PagesController@about');
Route::get('/pages.topquestions','PostsController@showtop');
Route::get('/posts.index','PostsController@index');
Route::get('/posts.create','PostsController@create');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::resource('posts','PostsController');