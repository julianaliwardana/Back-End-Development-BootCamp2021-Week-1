<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/form-article', 'ArticleController@index')->name('form-article')->middleware('auth');;
Route::post('/form-article', 'ArticleController@store')->name('get-article')->middleware('auth');;
Route::get('/article', 'ArticleController@show')->name('list-article')->middleware('auth');;
Route::get('/view-article/{id}', 'ArticleController@detail')->name('view-article')->middleware('auth');;
Route::get('/edit-article/{id}', 'ArticleController@edit')->name('edit-article')->middleware('auth');;
Route::put('/update-article/{id}', 'ArticleController@update')->name('update-article')->middleware('auth');;
Route::delete('/delete-article/{id}', 'ArticleController@delete')->name('delete-article')->middleware('auth');;
Route::get('/my-article', 'ArticleController@myArticle')->name('my-article')->middleware('auth');;
Route::post('/article/{id}', 'CommentController@store')->name('comment-article')->middleware('auth');;
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
