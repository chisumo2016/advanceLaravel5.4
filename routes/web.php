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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/one-to-one-inverse', function (){
    return App\Profile::find(2)->user;
});

Route::get('users/{userId}/articles', 'ArticleUserController@show');

Route::get('articles', 'ArticlesController@index');
