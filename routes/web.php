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


Route::get('/', 'NumaController@index');



//ビュー場面移動処理
Route::get('forms/login', 'NumaController@login');
Route::get('forms/signup', 'NumaController@signup');
Route::get('forms/message', 'NumaController@message');
Route::get('user', 'NumaController@user');
Route::get('user/edit/profile', 'NumaController@change');
Route::get('user/edit/article', 'NumaController@articleEdit');
Route::get('user/post/view', 'NumaController@viewPost');
Route::get('user/post/article', 'NumaController@articlePost');
Route::get('article/preview', 'NumaController@preview');
Route::get('article/detail', 'NumaController@detail');
Route::get('article/index', 'NumaController@articleList');
Route::get('article/view', 'NumaController@viewList');




Route::get('forms/contact', 'ContactController@add');
Route::post('form/contact', 'ContactController@create');


Route::post('form/signup', 'UserController@create');

Route::post('user/viewPost', 'ViewController@create');

Route::post('user/articlePost', 'ArticleController@create');