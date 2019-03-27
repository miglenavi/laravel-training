<?php

namespace App\Http\Controllers;

class ContactsController extends Controller
{
  public function index()
 {
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
 }
}
