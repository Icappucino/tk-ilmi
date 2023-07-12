<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route Homepage

Route::get('/', function () {
    return view('home');
});
Route::get('/Profile-Sekolah', function () {
    return view('profile-sekolah');
});
Route::get('/Jenjang-Pendidikan', function () {
    return view('jenjang-pendidikan');
});

// Route Dashbpard User
Route::get('/Dashboard-user', function () {
    return view('userDashboard.Dashboard');
});
Route::get('/Profile-user', function () {
    return view('userDashboard.profile');
});
Route::get('/User-Setting', function () {
    return view('userDashboard.setting');
});
Route::get('/Mata-Pelajaran', function () {
    return view('userDashboard.mataPelajaran');
});
Route::get('/Pembayaran', function () {
    return view('userDashboard.pembayaran');
});
Route::get('/Guru', function () {
    return view('userDashboard.guru');
});
Route::get('/Gallery', function () {
    return view('userDashboard.gallery');
});
Route::get('/Login', function () {
    return view('userDashboard.login');
});
Route::get('/Register', function () {
    return view('userDashboard.register');
});

// Route Admin Page

// Route Controller

Route::resource('/pengguna' , 'UserController');
Route::resource('/admin' , 'AdminController');
Route::resource('/guru' , 'GuruController');
Route::resource('/kategori' , 'KategoriController');
Route::resource('/mapel' , 'MataPelajaranController');
Route::resource('/siswa' , 'SiswaController');
Route::resource('/transaksi' , 'TransaksiController');
