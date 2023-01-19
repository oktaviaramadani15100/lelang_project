<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LelangController;

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

// Route::get('/tampilan', [LelangController::class, 'index'])->name('tampilan');

//landingpage
Route::get('/landing', [ItemController::class , 'landing']);


//login & register
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');

Route::get('login',[LoginController::class, 'index'])->name('login');

Route::controller(LoginController::class)->group(function(){
Route::get('login','index')->name('login');
Route::post('login/proses','proses');
Route::get('logout','logout');
});
Route::group(['middleware' => ['auth','cekUserLogin:1']], function() {
Route::resource('beranda',beranda::class);
});

Route::group(['middleware' => ['auth','cekUserLogin:2']], function() {
Route::resource('lobby',lobby::class);
});

//upload
Route::get('/market', [ItemController::class, 'index']);
Route::get('/tambah_detail', [ItemController::class, 'barang'])->name('tambah_detail');
Route::post('/insert_data', [ItemController::class, 'insert_detail'])->name('insert_data');

//detail
Route::get('/detail/{$id}', [ItemController::class, 'from_detail'])->name('detail');

