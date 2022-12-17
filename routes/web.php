<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BateraiKandangController;
use App\Http\Controllers\AnakKandangController;
use App\Http\Controllers\BarisKandangController;
use App\Http\Controllers\InformasiTernakController;
use App\Http\Controllers\KolomAyamController;
use App\Http\Controllers\RumusController;
use App\Http\Controllers\PerhitunganRumusController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PencatatanAyamController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('user/layout/home',[
//         'title'=>'Halaman Home'
//     ]);
// })->name('home');

Route::resource('bateraiKandang', BateraiKandangController::class);
Route::resource('anakKandang', AnakKandangController::class);
Route::resource('barisKandang', BarisKandangController::class);
Route::resource('informasiTernak', informasiTernakController::class);
Route::resource('kolomAyam', kolomAyamController::class);
Route::resource('rumus', RumusController::class);
Route::resource('perhitunganRumusKandang', PerhitunganRumusController::class);
Route::resource('user', UserController::class);
Route::resource('pencatatanAyam', pencatatanAyamController::class);

// Route::get('/home-user', function () {
//     return view('user/home');
// });

// Route::get('/login', function () {
//     return view('user/login');
// });

// Route::get('/pencatatan_ayam', function () {
//     return view('user/pencatatan_ayam');
// });

// Route::get('/edit_pencatatan', function () {
//     return view('user/editPencatatan');
// });

// Route::get('/detail_info', function () {
//     return view('user/detailInfo');
// });

// Route::get('/penghitunganHenDay', function () {
//     return view('user/penghitunganHenDay');
// });

// Route::get('/penghitunganEggWeight', function () {
//     return view('user/penghitunganEggWeight');
// });

// Route::get('/penghitunganFCR', function () {
//     return view('user/penghitunganFCR');
// });

// // Route::get('/baterai', function () {
// //     return view('admin/baterai/index');
// // });

// // Route::get('/baterai/edit', function () {
// //     return view('admin/baterai/edit');
// // });

// // Route::get('/baterai/create', function () {
// //     return view('admin/baterai/create');
// // });

// Route::get('/user', function () {
//     return view('admin/user/index');
// });