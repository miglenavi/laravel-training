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


Route::get('contact', 'ContactController@index')->name('page.contact');


//Route::resource('posts', 'PostController');

Route::resource('files', 'FileController');

Route::resource('posts', 'PostController');
Route::resource('comments', 'CommentController');


// Route::get('posts', 'PostController@index')->name('posts.index');
// Route::get('posts/create', 'PostController@create')->name('posts.create');
// Route::get('posts/{id}', 'PostController@show')->name('posts.show');
// Route::post('posts', 'PostController@store')->name('posts.store');

// Route::get('storage', 'FilesController@index')->name('storage.index');
// Route::get('storage/create', 'FilesController@create')->name('storage.create');
// Route::post('storage', 'FilesController@store');
// Route::get('storage/{id}', 'FilesController@show')->name('storage.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
