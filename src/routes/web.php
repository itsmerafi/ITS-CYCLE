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
Auth::routes();


# USER ROUTES
// Route::middleware(['auth'])->group(function() {
//     Route::get('/', 'HomeController@index')->name('index');

// 	Route::get('/dashboard','DashboardController@index')->name('dashboard.index');

// 	Route::get('/data-peminjaman','PeminjamanController@index')->name('peminjaman.index');
// 	Route::get('/form-peminjaman','PeminjamanController@form')->name('peminjaman.form');
// 	Route::post('/form-peminjaman','PeminjamanController@form')->name('peminjaman.form');

// 	Route::get('/data-sepeda','SepedaController@index')->name('sepeda.index');

// 	Route::get('/data-user','UserController@index')->name('user.index');
	
// 	Route::get('/notifikasi','NotifikasiController@index')->name('notifikasi.index');

// });

// Route::middleware(['admin'])->group(function() {

// 	Route::get('/admin', function () {
// 	    return view('home');
// 	});
// });

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'HomeController@index')->name('index');

Route::get('/dashboard','DashboardController@index')->name('dashboard.index');

Route::get('/data-peminjaman','PeminjamanController@index')->name('peminjaman.index');
Route::get('/form-peminjaman','PeminjamanController@form')->name('peminjaman.form');
Route::post('/form-peminjaman','PeminjamanController@form')->name('peminjaman.form');

Route::get('/data-sepeda','SepedaController@index')->name('sepeda.index');

Route::get('/data-user','UserController@index')->name('user.index');

Route::get('/notifikasi','NotifikasiController@index')->name('notifikasi.index');
