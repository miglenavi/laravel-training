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

//Route::resource('posts', 'PostController');



Route::resource('comments', 'CommentController');

Route::resource('categories', 'CategoryController');
//Route::get('categories/{category}', 'CategoryController@show')->name('categories.show');



Route::middleware('auth')->group(function () {
    Route::get('posts/create', 'PostController@create')->name('posts.create');
    Route::post('posts', 'PostController@store')->name('posts.store');
    Route::get('posts/{post}/edit', 'PostController@edit')->name('posts.edit');
    Route::put('posts/{post}', 'PostController@update')->name('posts.update');
    Route::delete('posts/{post}', 'PostController@destroy')->name('posts.destroy');

    Route::get('top-posts', 'ShowTopPosts')->name('posts.top');
    Route::get('recent-posts', 'ShowRecentPosts')->name('posts.recent');
    Route::get('deleted-posts', 'ShowDeletedPosts')->name('posts.deleted');
    Route::post('restore-post', 'RestorePost')->name('posts.restore');
});



Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/{post}', 'PostController@show')->name('posts.show');
Route::resource('comments', 'CommentController');
Route::post('duplicate-post', 'DuplicatePost')->name('posts.duplicate');
Route::get('deleted-files', 'ShowDeletedFiles')->name('files.deleted');
Route::get('deleted-comments', 'ShowDeletedComments')->name('comments.deleted');
Route::get('filter-files', 'FilterByExtension')->name('files.filtered');
Route::get('big-files', 'FilterBySize')->name('files.filtered');

Route::resource('files', 'FileController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
