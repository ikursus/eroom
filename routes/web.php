<?php

// Routes halaman utama
Route::get('/', function() {

  // Paparkan template yang bernama homepage.php
  return view('homepage');

});

Route::get('tempahan', function() {

  return view('borang_tempahan');

});

Route::get('status', function() {

  echo 'Halaman Status Booking';

});


// Paparkan senarai users dari table users
Route::get('users', function() {

  echo 'Halaman Senarai Users';

});
// Paparkan detail user berdasarkan ID
Route::get('users/{id}', function( $id ) {

  echo 'Ini adalah profile user ID ' . $id;

});

Route::get('bilik', function() {

  echo 'Halaman Senarai Bilik';

});

Route::get('bookings', function() {

  echo 'Halaman Senarai Bookings';

});

// Routes dari make:auth
Auth::routes();

Route::get('/dashboard', 'HomeController@index');