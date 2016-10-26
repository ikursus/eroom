<?php
 /*
  * Bahagian Guest
  */
// Route halaman utama
Route::get('/', 'PagesController@homepage');
// Route papar borang tempahan
Route::get('tempahan', 'TempahanController@borangTempahan');
//Route hantar borang tempahan
Route::post('tempahan', 'TempahanController@hantarTempahan');
// Route papar borang semak status tempahan
Route::get('status', 'TempahanController@borangStatus');
//Route hantar borang semak status tempahan
Route::post('status', 'TempahanController@semakStatus');

// Routes dari make:auth untuk fungsi login dan logout
Auth::routes();

/*
 * Bahagian Admin
 */
// Route halaman dashboard admin
Route::get('dashboard', 'PagesController@dashboard');

// Route group users
Route::group(['prefix' => 'users'], function() {

  // Route papar senarai users
  Route::get('/', 'UsersController@index');
  // Route papar borang tambah user
  Route::get('add', 'UsersController@create');
  // Route simpan maklumat tambah user
  Route::post('add', 'UsersController@store');
  // Route papar borang kemaskini user
  Route::get('{id}', 'UsersController@edit');
  // Route simpan maklumat kemaskini user
  Route::patch('{id}', 'UsersController@update');
  // Route hapus maklumat user
  Route::delete('{id}', 'UsersController@destroy');

});

// Route group bilik
Route::group(['prefix' => 'bilik'], function() {

  // Route papar senarai
  Route::get('/', 'BilikController@index');
  // Route papar borang tambah
  Route::get('add', 'BilikController@create');
  // Route simpan maklumat tambah
  Route::post('add', 'BilikController@store');
  // Route papar borang kemaskini
  Route::get('{id}', 'BilikController@edit');
  // Route simpan maklumat kemaskini
  Route::patch('{id}', 'BilikController@update');
  // Route hapus maklumat
  Route::delete('{id}', 'BilikController@destroy');

});

// Route group bilik
Route::group(['prefix' => 'tempahan'], function() {

  // Route papar senarai tempahan
  Route::get('senarai', 'TempahanController@index');
  // Route papar borang kemaskini
  Route::get('{id}', 'TempahanController@edit');
  // Route simpan maklumat kemaskini
  Route::patch('{id}', 'TempahanController@update');
  // Route hapus maklumat
  Route::delete('{id}', 'TempahanController@destroy');

});
