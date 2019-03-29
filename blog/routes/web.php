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

//Route::get('about', function () {
//    return view('about');
//});

Route::view('about', 'about');


Route::get('contact', 'ContactsController@index')->name('page.contact');


//Route::resource('posts', 'PostController');

Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/create', 'PostController@create')->name('posts.create');
Route::get('posts/{id}', 'PostController@show')->name('posts.show');
Route::post('posts', 'PostController@store')->name('posts.store');

Route::get('storage', 'FileController@index')->name('storage.index');
Route::get('storage/create', 'FileController@create')->name('storage.create');
Route::get('storage/{id}', 'FileController@show')->name('storage.show');
