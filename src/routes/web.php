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
Route::middleware(['auth'])->group(function() {
    Route::get('/', 'HomeController@index')->name('dashboard.index');
	Route::get('/form-pinjam', 'PeminjamanController@index')->name('peminjaman.index');
	Route::post('/form-pinjam', 'PeminjamanController@index')->name('peminjaman.index');
	Route::get('/dashboard', function () {
	    return view('dashboard');
	});
	Route::get('/data-peminjaman', function () {
	    return view('data-peminjaman');
	});
	Route::get('/loginmhs', function () {
	    return view('loginmhs');
	});
	Route::post('/loginmhs', function () {
	    return view('loginmhs');
	});
	Route::get('/manage-user', function () {
	    return view('manage-user');
	});
	Route::get('/data-cycle', function () {
	    return view('manage-cycle');
	});
	Route::get('/notifikasi', function () {
	    return view('notifikasi');
	});
	Route::get('/konfirmasi', function () {
	    return view('form');
	});
});

#ADMIN

// Route::group(['middleware' => ['web']], function () {
//     Route::get('login', 'UserLoginController@getUserLogin');
//     Route::post('login', ['as'=>'user.auth','uses'=>'UserLoginController@userAuth']);
//     Route::get('admin/login', 'AdminLoginController@getAdminLogin');
//     Route::post('admin/login', ['as'=>'admin.auth','uses'=>'AdminLoginController@adminAuth']);
    
//     Route::group(['middleware' => ['admin']], function () {
//         Route::get('admin/dashboard', ['as'=>'admin.dashboard','uses'=>'AdminController@dashboard']);
//     });
// });


// Route::get('/home', 'HomeController@index')->name('home');
