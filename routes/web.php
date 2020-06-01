<?php

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();


Route::group(['middleware' => 'auth'], function () {
    Route::post('comment/save', 'CommentController@save')->name('comment.save');
    Route::get('profiles/{username}', 'ProfilesController@show')->name('profiles.show');
    Route::get('comment/{id}/form', 'CommentController@comment_delete')->name('comment.delete');
    Route::get('post/my_likes', 'PostController@my_likes')->name('my_likes.show');
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('post/form', 'PostController@form')->name('post.form');
    Route::post('post/save', 'PostController@save')->name('post.save');
    Route::get('post/{id}/delete', 'PostController@delete')->name('post.delete');
    Route::get('post/{id}/like', 'PostController@like')->name('post.like');
    Route::get('post/{id}/form', 'PostController@form')->name('post.form.edit');
});
