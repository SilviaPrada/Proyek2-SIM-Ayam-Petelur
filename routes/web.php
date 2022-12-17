<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnakKandangController;
use App\Http\Controllers\InformasiTernakController;
use App\Http\Controllers\BateraiKandangController;

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

Route::get('/penghitunganFCR', function () {
    return view('user/penghitunganFCR');
});

Route::get('/', function () {
    return view('admin.welcome');
});

Route::get('/informasi', function () {
    return view('admin/informasi/index');
});

Route::get('/anakKandang', function () {
    return view('admin/anakKandang/index');
});

Route::get('/baterai', function () {
    return view('admin/baterai/index');
});

// Route::resource('admin.anakKandang', AnakKandangController::class);
// Route::resource('informasi', InformasiTernakController::class);
// Route::resource('admin.baterai', BateraiKandangController::class);

// Route::get('/admin', [AnakKandangController::class, 'index'])->name('anakKandang');

    // Route::get('admin/anakKandang/bateraiKandang/{id}', 'AnakKandangController@bateraiKandang')->name('anakKandang.bateraiKandang');
    // Route::get('admin/anakKandang/view/json', 'AnakKandangController@view');
    // Route::get('admin/anakKandang/ubah-foto/{id}', 'AnakKandangController@ubah_foto')->name('anakKandang.ubah-foto');
    // Route::post('admin/anakKandang/update-foto/{id}', 'AnakKandangController@update_foto')->name('anakKandang.update-foto');;
    // Route::delete('/anakKandang/deleteAll', 'AnakKandangController@deleteAll')->name('anakKandang.deleteAll');
    // Route::resource('anakKandang', 'AnakKandangController');

    // Route::controller(AnakKandangController::class)->group(function () {
    //     Route::get('anakKandang/index', 'index');
    // });    