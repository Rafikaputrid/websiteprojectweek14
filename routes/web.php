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

//Routing data Admin
Route::get('/admin', 'adminController@index');
Route::get('/admin/tambah', 'adminController@tambah');
Route::post('/admin/store', 'adminController@store');
Route::get('/admin/edit/{id}', 'adminController@edit');
Route::post('/admin/update', 'adminController@update');
Route::get('/admin/delete/{id}', 'adminController@delete');
Route::get('/admin/cetak_pdf', 'adminController@cetak_pdf');

//Routing data Pelanggan
Route::get('/pelanggan', 'pelangganController@index');
Route::get('/pelanggan/tambah', 'pelangganController@tambah');
Route::post('/pelanggan/store', 'pelangganController@store');
Route::get('/pelanggan/edit/{id}', 'pelangganController@edit');
Route::post('pelanggan/upgrade', 'pelangganController@upgrade');
Route::get('/pelanggan/delete/{id}', 'pelangganController@delete');

//Routing data Kategori
Route::get('/kategori', 'kategoriController@index');
Route::get('/kategori/tambah', 'kategoriController@tambah');
Route::post('/kategori/store', 'kategoriController@store');
Route::get('/kategori/edit/{id}', 'kategoriController@edit');
Route::post('/kategori/update', 'kategoriController@update');
Route::get('/kategori/delete/{id}', 'kategoriController@delete');

//Routing data Barang
Route::get('/barang', 'barangController@index');
Route::get('/barang/tambah', 'barangController@tambah');
Route::post('/barang/store', 'barangController@store');
Route::get('/barang/edit/{id}', 'barangController@edit');
Route::post('/barang/update', 'barangController@update');
Route::get('/barang/delete/{id}', 'barangController@delete');

//Routing data Metode Bayar
Route::get('/metode-bayar', 'metodeBayarController@index');
Route::get('/metode-bayar/tambah', 'metodeBayarController@tambah');
Route::post('/metode-bayar/store', 'metodeBayarController@store');
Route::get('/metode-bayar/edit/{id}', 'metodeBayarController@edit');
Route::post('/metode-bayar/update', 'metodeBayarController@update');
Route::get('/metode-bayar/delete/{id}', 'metodeBayarController@delete');

//Routing data Transaksi
Route::get('/transaksi', 'transaksiController@index');
Route::get('/transaksi/tambah', 'transaksiController@tambah');
Route::post('/transaksi/store', 'transaksiController@store');
Route::get('/transaksi/edit/{id}', 'transaksiController@edit');
Route::post('/transaksi/update', 'transaksiCOntroller@update');
Route::get('/transaksi/delete/{id}', 'transaksiController@delete');

//Routing data Detail Transaksi
Route::get('/detail-transaksi', 'detailTransaksiController@index');
Route::get('/detail-transaksi/tambah', 'detailTransaksiController@tambah');

//Routing Link 
Route::get('/home-cust', 'homeController@customer');
Route::get('/home-admin', 'homeController@admin');
Route::get('/login-cust', 'homeController@loginCust');
Route::post('/postLoginCust', 'homeController@postLoginCust');
Route::get('/login-admin', 'homeController@loginAdmin');
Route::post('/postLoginAdmin', 'homeController@postLoginAdmin');
Route::get('/signup', 'homeController@signup');
Route::post('/postSignUp', 'homeController@postSignUp');
Route::get('/home-cust/handbag', 'homeController@handbag');











//COBA-COBA
Route::get('/hi', function(){
    return "CIE BELAJAR LARAVEL HEHE";
});
Route::get('myView', function(){
    return view('webtest');
});
route::get('{id}', function($id){
    echo 'ID ANDA : '.$id;
});
route::get('/', function(){
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
