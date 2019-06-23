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

Route::middleware(['guest'])->group(function(){
	Route::get('/', 'AuthController@getLogin')->name('login');
	Route::post('postlogin', 'AuthController@postLogin')->name('postlogin');
	Route::get('resetPassword', 'AuthController@resetPassword')->name('resetPassword');
	Route::post('postReset', 'AuthController@postReset')->name('postReset');
});

Route::middleware(['web', 'auth'])->group(function(){
	// HOME
	Route::get('home', 'PagesController@index')->name('home');
	// ANGGARAN PELATIHAN
	Route::get('anggaran_plth', 'PagesController@ang_plth')->name('ang_plth');
	Route::get('anggaran_plth/input', 'AngPlthController@index')->name('ang_plth_in');
	// ANGGARAN SPD DALAM
	Route::get('anggaran_spd_dalam', 'PagesController@ang_spd')->name('ang_spd_dalam');
	Route::get('anggaran_spd_dalam/input', 'AngSpdController@showInputDalam')->name('ang_spd_d_in');
	// ANGGARAN SPD LUAR
	Route::get('anggaran_spd_luar', 'PagesController@ang_spd')->name('ang_spd_luar');
	Route::get('anggaran_spd_luar/input', 'AngSpdController@showInputLuar')->name('ang_spd_l_in');
	// KEGIATAN
	Route::get('kegiatan', 'PagesController@kegiatan')->name('kegiatan');
	Route::get('kegiatan/input', 'PagesController@showInputKeg')->name('kegiatan_in');
	Route::post('kegiatan/input/proses', 'KegiatanController@store')->name('store_keg');
	Route::post('kegiatan/sort', 'KegiatanController@period')->name('period_keg');
	// PROKER
	Route::get('proker_aktif', 'PagesController@pk_aktif')->name('pk_aktif');
	Route::get('proker_pasif', 'PagesController@pk_pasif')->name('pk_pasif');
	// KALENDER
	Route::get('kalender', 'PagesController@kalender')->name('kalender');

	Route::get('exportKegiatan', 'KegiatanController@exportKegiatan')->name('exportKegiatan');

	// LOGOUT
	Route::get('logout', 'AuthController@getLogout')->name('logout');
});