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
    return view('home');
});

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::post('/login/store','AuthController@store');
Route::get('logout','AuthController@logout');
Route::get('/regristrasi/create','RegristrasiController@create');
Route::get('/regristrasi','RegristrasiController@index');

Route::group(['middleware' => ['auth','checkRole:admin']],function(){
    //Kendaraan
    Route::get('/kendaraan/create','KendaraanController@create');
    Route::post('/kendaraan/save','KendaraanController@save');
    Route::get('/kendaraan','KendaraanController@index');
    Route::get('/kendaraan/tampil','KendaraanController@tampil');
    Route::get('/kendaraan/carikend','KendaraanController@carikend');
    Route::get('/kendaraan/edit/{id}','KendaraanController@edit');
    Route::post('/kendaraan/update/{id}','KendaraanController@update');
    
    //Karyawan
    Route::get('/karyawan','KaryawanKontroller@index');
    Route::get('/karyawan/create','KaryawanKontroller@create');
    Route::post('/karyawan/store','KaryawanKontroller@store');
    Route::get('/karyawan/delete/{id}','KaryawanKontroller@delete');
    
    
    //driver
    Route::get('/driver','DriverController@index');
    Route::get('/driver/cari','DriverController@cari');
    Route::get('/driver/create','DriverController@create');
    Route::post('/driver/store','DriverController@store');
    Route::get('/driver/edit/{id}','DriverController@edit');
    Route::post('/driver/update/{id}','DriverController@update');
    Route::get('/driver/delete/{id}','DriverController@delete');
    
    //Laporan
    Route::get('/laporan/tampil','LaporanController@tampil');
    Route::get('/laporan/nopol','LaporanController@nopol');
    Route::get('/laporan/laporan','LaporanController@laporan');
    Route::get('/laporan/preview/{awal}/{akhir}','LaporanController@preview');

    //Pengajuan
    Route::get('/pengajuan/cari','PengajuanController@cari');
    Route::get('/pengajuan/delete/{id}','PengajuanController@delete');
    Route::get('/pengajuan/setuju/{id}','PengajuanController@setuju');
    Route::post('/pengajuan/simpan/{id}','PengajuanController@simpan');
    Route::get('/pengajuan/cari1','PengajuanController@cari1');
    Route::get('/pengajuan/rubahkend/{id}','PengajuanController@rubahkend');
    Route::post('/pengajuan/rubah/{id}','PengajuanController@rubah');
    Route::get('/pengajuan/close/{id}','PengajuanController@close');
    Route::post('/pengajuan/prosesclose/{id}','PengajuanController@prosesclose');
    Route::get('/pengajuan/tampilclose','PengajuanController@tampilclose');
    Route::get('/pengajuan/cariclose','PengajuanController@cariclose');
    Route::get('/pengajuan/rubahoddo/{id}','PengajuanController@rubahoddo');
    Route::post('/pengajuan/simpanoddo/{id}','PengajuanController@simpanoddo');
    Route::get('/pengajuan/preview/{id}','PengajuanController@preview');
    Route::get('/pengajuan/tampilsetuju','PengajuanController@tampilsetuju');
});

Route::group(['middleware' => ['auth','checkRole:admin,karyawan']],function(){
    Route::get('/dashboard','DashboardController@index');
    Route::get('/dashboard/user','DashboardController@user');
    
    //Pengajuan
    Route::get('/pengajuan/create','PengajuanController@create');
    Route::post('/pengajuan/store','PengajuanController@store');
    Route::get('/pengajuan/edit/{id}','PengajuanController@edit');
    Route::post('/pengajuan/update/{id}','PengajuanController@update');
    Route::get('/pengajuan','PengajuanController@index');
    Route::post('/kendaraan/getnama','KendaraanController@getnama')->name('kendaraan.getnama');
    Route::post('/pengajuan/getnama1','PengajuanController@getnama1')->name('pengajuan.getnama1');
    Route::post('/pengajuan/getnopol','PengajuanController@getnopol')->name('pengajuan.getnopol');
    
});