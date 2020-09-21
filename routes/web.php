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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
  // alternativa alla documentazione--> sezione "Display Data"
  $data = config('paste.data', []); // [] il secondo argomento serve per dare un valore di default in caso non esista il file nella dir /config al file paste.php alla key data
  return view('home', compact('data'));
}) -> name('home');


Route::get('/product', function () {
    return view('prodotti');
}) -> name('prodotti');

Route::get('/news', function () {
    return view('news');
}) -> name('news');

// Route::get('/active', function () {
//   // alternativa alla documentazione--> sezione "Display Data"
//   $hello = "Hello there";
//   $arr = 10;
//     return view('home', compact('hello', 'arr'));
// });
//
// Route::get('/deactive', function () {
//   $hello = "Hello there";
//     return view('home', compact('hello'));
// });
//
// Route::get('/for', function () {
//   $hello = "Hello there";
//   $arr1 = [1, 2, 3, 4, 5, 6, 7, 8];
//     return view('home', compact('hello', 'arr1'));
// });
//
// Route::get('/lay', function () {
//   $hello = "Hello there";
//     return view('home', compact('hello'));
// });
