<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RumusController;
use App\Http\Controllers\KolomAyamController;
use App\Http\Controllers\AnakKandangController;
use App\Http\Controllers\BarisKandangController;
use App\Http\Controllers\BateraiKandangController;
use App\Http\Controllers\PencatatanAyamController;
use App\Http\Controllers\InformasiTernakController;
use App\Http\Controllers\PerhitunganRumusController;

  Route::get('/admin', function () {
    return view('admin/index');
});

Route::resource('bateraiKandang', BateraiKandangController::class);
Route::resource('anakKandang', AnakKandangController::class);
Route::resource('barisKandang', BarisKandangController::class);
Route::resource('informasiTernak', informasiTernakController::class);
Route::resource('kolomAyam', kolomAyamController::class);
Route::resource('rumus', RumusController::class);
Route::resource('perhitunganRumusKandang', PerhitunganRumusController::class);
Route::resource('user', UserController::class);
Route::resource('pencatatanAyam', pencatatanAyamController::class);
Route::resource('homePage', HomeController::class);

Auth::routes();
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
// Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/coba', function () {
    return view('coba');
});
Route::get('/crud', 'App\Http\Controllers\PencatatanAyamController@crud');

Route::get('/pencatatanAyamKandang', function () {
    return view('admin/laporanPencatatan.crud');
});

// ROUTE INFORMASI TERNAK
Route::get('/gumboro', function () {
    return view('user.detailinfo.gumboro');
});
Route::get('/coryza', function () {
    return view('user.detailinfo.coryza');
});
Route::get('/virusnd', function () {
    return view('user.detailinfo.virusnd');
});

Route::get('/pencatatan', function () {
    return view('admin/laporanPencatatan.index');
});

Route::get('/pencatatan_ayam', function () {
    return view('user/pencatatan_ayam');
});

Route::get('/edit_pencatatan', function () {
    return view('user/editPencatatan');
});

Route::get('/detail_info', function () {
    return view('user/detailInfo');
});

Route::get('/penghitunganHenDay', function () {
    return view('user/penghitunganHenDay');
});

Route::get('/penghitunganEggWeight', function () {
    return view('user/penghitunganEggWeight');
});

Route::get('/penghitunganFCR', function () {
    return view('user/penghitunganFCR');
});

Route::get('/penghitunganDeplesi', function () {
    return view('user/penghitunganDeplesi');
});
// // Route::get('/baterai', function () {
// //     return view('admin/baterai/index');
// // });

// // Route::get('/baterai/edit', function () {
// //     return view('admin/baterai/edit');
// // });

// // Route::get('/baterai/create', function () {
// //     return view('admin/baterai/create');
// // });

Route::get('/user', function () {
    return view('admin/user/index');
});

