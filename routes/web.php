<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home-user', function () {
    return view('user/home');
});

Route::get('/login', function () {
    return view('user/login');
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