<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

// Route Homepage
Route::get('/', function () {
    return view('beranda');
});

Route::get('/Beranda', function () {
    return view('beranda');
});

Route::get('/Profile-Sekolah', function () {
    return view('profile-sekolah');
});

Route::get('/Jenjang-Pendidikan', function () {
    return view('jenjang-pendidikan');
});

// Route Dashboard User
Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/Dashboard-user', function () {
        return view('userDashboard.Dashboard');
    });

    Route::get('/Profile-user', function () {
        return view('userDashboard.profile');
    });
    // ... tambahkan rute lainnya sesuai kebutuhan aplikasi
});

Route::get('/User-Setting', function () {
    return view('userDashboard.setting');
})->middleware('auth');

Route::get('/Mata-Pelajaran', function () {
    return view('userDashboard.mataPelajaran');
})->middleware('auth');

Route::get('/Pembayaran', function () {
    return view('userDashboard.pembayaran');
})->middleware('auth');

Route::get('/Guru', function () {
    return view('userDashboard.guru');
})->middleware('auth');

Route::get('/Gallery', function () {
    return view('userDashboard.gallery');
})->middleware('auth');

Route::get('/Riwayat-Pembayaran', function () {
    return view('userDashboard.riwayatPembayaran');
})->middleware('auth');

// Route Admin Page
Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/Admin-Page-Dashboard-Admin', function () {
        return view('admin.dashboard');
    });

    Route::get('/Account-Admin', function () {
        return view('admin.account');
    });
    // ... tambahkan rute lainnya sesuai kebutuhan aplikasi
});

Route::get('/Transaksi', function () {
    return view('admin.transaksi');
})->middleware('auth');

Route::get('/Riwayat-Transaksi', function () {
    return view('admin.RiwayatTransaksi');
})->middleware('auth');

Route::get('/Data-siswa', function () {
    return view('admin.datasiswa');
})->middleware('auth');

// Route Controller
Route::resource('siswa', SiswaController::class)->middleware('auth');
Route::resource('user', UserController::class)->middleware('auth');
Route::resource('transaksi', TransaksiController::class)->middleware('auth');

// DB Session
Route::get('/Form-Siswa', function () {
    return view('siswa.register');
});

// DB Controller Calling ID
Route::get('/siswa/{id}', function (string $id) {
    return 'siswa ' . $id;
});

Route::get('/transaksi/{id}', function (string $id) {
    return 'transaksi ' . $id;
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Profile
Route::get('/profile/siswa', 'SiswaController@profile')->name('profile.siswa')->middleware('auth');
Route::get('/profile', 'ProfileController@show')->middleware('auth');
Route::get('siswapdf', [SiswaController::class, 'siswaPDF'])->middleware('auth');

Route::get('siswapdf', [SiswaController::class, 'siswaPDF']);
Route::get('program-sem-1', [SiswaController::class, 'progSem1']);
Route::get('program-sem-2', [SiswaController::class, 'progSem2']);
