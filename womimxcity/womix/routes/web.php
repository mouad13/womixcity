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

Route::get('/inscription', function () {
    return view('inscription');
});

Route::get('/sailor/inscription', function(){
  return view('sailor.inscription');
});

Route::get('/professional/inscription', function(){
  return view('pro.inscription');
});

Route::get('/sailor/map', function(){
  return view('sailor.map');
});
