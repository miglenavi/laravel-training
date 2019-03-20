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
//    return view(view:'about');
//});

Route::view('about', 'about');

Route::get('contact', function () {

$name = 'Migle Navickaite';
$email = 'migle@mailerlite.com';
$phone = '867951201';

$interests = [
  'Kava',
  'Kompas',
  'Kaitas'
];

//compact dazniausiai naudojamas!!

$data = compact('name', 'email', 'phone', 'interests');

 return view('contact', $data);

});
