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
	Route::get('home', 'HomeController@index')->name('home');
	// ANGGARAN PELATIHAN
	Route::get('anggaran_plth', 'AngPlthController@index')->name('ang_plth');
	Route::get('anggaran_plth/input', 'AngPlthController@showInput')->name('ang_plth_in');
	Route::post ('anggaran_plth/pilih', 'AngPlthController@pilih')->name('pilih_ap');
	// ANGGARAN SPD DALAM
	Route::get('anggaran_spd_dalam', 'AngSpdController@index')->name('ang_spd_dalam');
	Route::get('anggaran_spd_dalam/input', 'AngSpdController@showInputDalam')->name('ang_spd_d_in');
	// ANGGARAN SPD LUAR
	Route::get('anggaran_spd_luar', 'AngSpdController@index')->name('ang_spd_luar');
	Route::get('anggaran_spd_luar/input', 'AngSpdController@showInputLuar')->name('ang_spd_l_in');
	// KEGIATAN
	Route::get('kegiatan', 'KegiatanController@index')->name('kegiatan');
	Route::get('kegiatan/input', 'KegiatanController@showInputKeg')->name('kegiatan_in');
	Route::post('kegiatan/input/proses', 'KegiatanController@store')->name('store_keg');
	Route::post('kegiatan/sort', 'KegiatanController@period')->name('period_keg');
	// PROKER
	Route::get('proker_aktif', 'ProkerController@pk_aktif')->name('pk_aktif');
	Route::get('proker_pasif', 'ProkerController@pk_pasif')->name('pk_pasif');
	// KALENDER
	Route::get('kalender', 'PagesController@kalender')->name('kalender');

	Route::get('exportKegiatan', 'KegiatanController@exportKegiatan')->name('exportKegiatan');

	// LOGOUT
	Route::get('logout', 'AuthController@getLogout')->name('logout');

	// Report
	Route::get('report1', 'ProkerController@report1')->name('report1');
}); 