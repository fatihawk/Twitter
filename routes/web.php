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
    Route::post('profiles/{username}', 'ProfilesController@update_avatar')->name('profiles.save');
    Route::get('comment/{id}/form', 'CommentController@comment_delete')->name('comment.delete');
    Route::get('post/my_images', 'PostController@my_images')->name('my_images.show');
    Route::get('post/my_likes', 'PostController@my_likes')->name('my_likes.show');
    Route::post('/search', 'PostController@search')->name('search');
    Route::get('/obs', 'OgrenciController@obs')->name('obs.show');
    Route::get('/task', 'TaskController@form')->name('task.show');
    Route::post('/task/save', 'TaskController@save')->name('task.save');
    Route::get("/{id}/complete", "TaskController@complete");
    Route::get("/{id}/delete", "TaskController@destroy");
    Route::get('/job', 'JobController@form')->name('job.show');
    Route::post('/job/save', 'JobController@save')->name('job.save');
    Route::post('/done/save', 'DoneController@save')->name('done.save');
    Route::get('/done/{id}/show', 'DoneController@show')->name('job.show');
    Route::get('/musteri/form', 'AdresController@form')->name('musteri.form');
    Route::post('/musteri/save', 'AdresController@save')->name('musteri.save');
    Route::get('/siparis/form', 'SiparisController@form')->name('siparis.form');
    Route::post('/siparis/save', 'SiparisController@save')->name('siparis.save');
    Route::post('/odeme/save', 'OdemeController@save')->name('odeme.save');
    Route::get('/siparis/detay', 'SiparisController@show')->name('siparis.show');
    Route::get('/siparis/elektronik', 'ElektronikController@form')->name('elektronik.form');
    Route::get('/siparis/mutfak', 'MutfakController@form')->name('mutfak.form');
    Route::get('/siparis/temizlik', 'TemizlikController@form')->name('temizlik.form');
    Route::get('/siparis/kirtasiye', 'KirtasiyeController@form')->name('kirtasiye.form');
    Route::get('/siparis/spor', 'SporController@form')->name('spor.form');
    Route::get('/siparis/telefon', 'TelefonController@form')->name('telefon.form');
    Route::get('/siparis/kitap', 'KitapController@form')->name('kitap.form');
    Route::get('/siparis/giyim', 'GiyimController@form')->name('giyim.form');
    Route::get('/siparis/kozmetik', 'KozmetikController@form')->name('kozmetik.form');
    Route::get('/siparis/muzik', 'MuzikController@form')->name('muzik.form');
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('post/form', 'PostController@form')->name('post.form');
    Route::post('post/save', 'PostController@save')->name('post.save');
    Route::get('post/{id}/delete', 'PostController@delete')->name('post.delete');
    Route::get('post/{id}/like', 'PostController@like')->name('post.like');
    Route::get('post/{id}/form', 'PostController@form')->name('post.form.edit');
});

Route::middleware(['role:ogretmen'])->prefix('ogretmen')->group(function () {
    Route::get('/form', 'OgretmenController@form')->name('ogretmen.form');
    Route::post('/save', 'OgretmenController@save')->name('ogretmen.save');
});

Route::middleware(['role:ogrenci'])->prefix('ogrenci')->group(function () {
    Route::get('/show', 'OgrencilerController@show')->name('ogrenci.show');
});

Route::middleware(['role:ogrenci2'])->prefix('ogrenci2')->group(function () {
    Route::get('/show', 'Ogrenci2Controller@show')->name('ogrenci2.show');
});

Route::middleware(['role:ogrenci3'])->prefix('ogrenci3')->group(function () {
    Route::get('/show', 'Ogrenci3Controller@show')->name('ogrenci3.show');
});

Route::middleware(['role:ogrenci4'])->prefix('ogrenci4')->group(function () {
    Route::get('/show', 'Ogrenci4Controller@show')->name('ogrenci4.show');
});

Route::middleware(['role:ogrenci5'])->prefix('ogrenci5')->group(function () {
    Route::get('/show', 'Ogrenci5Controller@show')->name('ogrenci5.show');
});
