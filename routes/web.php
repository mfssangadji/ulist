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


Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('statistik', 'PublicController@statistik')->name('statistik');
Route::get('maps', 'PublicController@maps')->name('maps');
Route::get('maps/{kecid}/kecamatan', 'PublicController@kecmaps');
Route::get('maps/{jenis}/jenis', 'PublicController@jenismaps');
Route::post('cari', 'PublicController@postcari');
Route::get('maps/{cari}/cari', 'PublicController@carimaps');
Route::get('kontak', function(){
	return view('kontak');;
})->name('kontak');


Route::get('/login', 'AuthController@login')->name('login');
Route::post('/loginpost', 'AuthController@loginpost');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function(){
	Route::get('dashboard', function() {
		return view('auths.dashboard');
	})->name('dashboard');

	Route::resource('users', 'UsersController', [
		'names' => [
			'index' => 'users',
			'create' => 'users.add',
		]
	]);

	Route::resource('kecamatan', 'KecamatanController', [
		'names' => [
			'index' => 'kecamatan',
			'create' => 'kecamatan.add',
		]
	]);

	Route::resource('jenis', 'KelurahanController', [
		'names' => [
			'index' => 'jenis',
			'create' => 'jenis.add',
		]
	]);

	Route::get('rth/{id}/view', 'RthController@view');
	Route::resource('rth', 'RthController', [
		'names' => [
			'index' => 'rth',
			'create' => 'rth.add',
		]
	]);
});