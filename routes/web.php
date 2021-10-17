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


Route::get('/', 'NumaController@add');
Route::get('/', 'NumaController@topix');





//ビュー場面移動処理
Route::get('forms/login', 'NumaController@login');
Route::get('register', 'NumaController@signup');
Route::get('forms/message', 'NumaController@message');
Route::get('user', 'NumaController@user');
Route::get('user/post/view', 'NumaController@viewPost');
Route::get('user/post/article', 'NumaController@articlePost');
Route::get('article/detail', 'NumaController@detail');
Route::get('article/index', 'NumaController@articleList');
Route::get('article/view', 'NumaController@viewList');
Route::get('user/edit/article', 'NumaController@articleEdit');
Route::get('privacy-policy', 'NumaController@privacy');




Route::get('forms/contact', 'ContactController@add');
Route::post('form/contact', 'ContactController@create');


//Route::post('form/signup', 'UserController@create');
Route::get('user', 'UserController@userIndex');
Route::get('user/edit/profile', 'UserController@edit');
Route::post('user/edit/profile', 'UserController@update');
Route::post('user', 'UserController@delete');




Route::post('user/articlePost', 'ArticleController@create');
Route::get('article/index', 'ArticleController@index');
Route::get('article/view', 'ArticleController@random');
Route::get('article/detail', 'ArticleController@show');
Route::get('user/edit/article', 'ArticleController@edit');
Route::post('user/edit/article', 'ArticleController@update');
Route::get('article/preview', 'ArticleController@preview');
Route::get('user/delete/article', 'ArticleController@deleteEdit');
Route::post('user/delete/article', 'ArticleController@delete');



Route::post('user/viewPost', 'ViewController@create');
Route::get('article/view', 'ViewController@index');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
