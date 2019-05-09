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


###USER ROUTES
// Route::middleware(['auth'])->group(function() {
//     Route::get('/', 'HomeController@index')->name('index');

// 	Route::get('/form-peminjaman','PeminjamanController@form')->name('peminjaman.form');
// 	Route::post('/form-peminjaman','PeminjamanController@form')->name('peminjaman.form');

// });

### ADMIN ROUTES
Route::middleware(['admin'])->group(function() {
	// Route::get('/', 'HomeController@index')->name('index');

	Route::get('/dashboard','DashboardController@index')->name('dashboard.index');
	Route::post('/dashboard','DashboardController@index')->name('dashboard.index');

	Route::get('/data-peminjaman','PeminjamanController@index')->name('peminjaman.index');
	Route::post('/data-peminjaman','PeminjamanController@index')->name('peminjaman.index');
	Route::resource('peminjaman','PeminjamanController');
	// Route::get('/form-peminjaman','PeminjamanController@form')->name('peminjaman.form');
	// Route::post('/form-peminjaman','PeminjamanController@form')->name('peminjaman.form');
	Route::resource('sepeda','SepedaController');

	Route::resource('data-user','UserController');
	
	Route::get('/notifikasi','NotifikasiController@index')->name('notifikasi.index');
	Route::post('/notifikasi','NotifikasiController@index')->name('notifikasi.index');

});

Route::get('/hak', function () {
	    return view('hak');
	});

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'HomeController@index')->name('index');
Route::get('/form-peminjaman','PeminjamanController@form')->name('peminjaman.form');
Route::post('peminjaman/form', 'PeminjamanController@form')->name('peminjaman.form');
