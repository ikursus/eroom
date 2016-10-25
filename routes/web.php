<?php

// Routes halaman utama
Route::get('/', function() {

  // Paparkan template yang bernama homepage.php
  return view('homepage');

});

Route::get('tempahan', function() {

  // Paparkan borang untuk tempahan bilik
  return view('borang_tempahan');

});

Route::get('status', function() {
  // Contoh variable di pass ke view
  $no_tempahan = 123;

  // Paparkan borang untuk semakan status tempahan
  // Sertakan sekali variable untuk dipaparkan pada template
  return view('borang_status', compact('no_tempahan') );

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
