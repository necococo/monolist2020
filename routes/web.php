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

Route::get('/', 'WelcomeController@index');
// ユーザ登録  /signup

Route::get('ranking/want', 'RankingController@want')->name('ranking.want');
Route::get('ranking/have', 'RankingController@have')->name('ranking.have');

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
// ログイン認証  /login
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login.get');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => ['auth']], function () {
    // get    /items/create    &   /items/create?utf8=%E2%9C%93&keyword=aaaaaa&commit=%E5%95%86%E5%  とか
    Route::resource('items', 'ItemsController', ['only' => ['create', 'show']]);
    // /want
    Route::post('want','ItemUserController@want')->name('item_user.want');
    Route::delete('want', 'ItemUserController@dont_want')->name('item_user.dont_want');
    Route::post('have','ItemUserController@have')->name('item_user.have');
    Route::delete('have', 'ItemUserController@dont_have')->name('item_user.dont_have');
    Route::resource('users', 'UsersController', ['only' => ['show']]);    
});