<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

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
    return view('welcome');
});
Route::group(['middleware'=>'auth'], function (){
    Route::resource('admin',AdminController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/landingpage', [HomeController::class, 'landingpage'])->name('landingpage');
Route::get('/beranda', [HomeController::class, 'beranda'])->name('beranda');
Route::get('/daftar', [HomeController::class, 'daftar'])->name('daftar');
Route::get('/table', [HomeController::class, 'table'])->name('table');
Route::get('/halaman', [HomeController::class, 'halaman'])->name('halaman');
Route::get('/form', [HomeController::class, 'form'])->name('form');
Route::get('/akun', [HomeController::class, 'Akun'])->name('akun');
Route::get('/buatlowongan', [HomeController::class, 'buat'])->name('buatlowongan');
Route::get('/detailProduk', [HomeController::class, 'detailProduk'])->name('detailProduk');



Route::middleware('auth')->group(function () {
    // Route::get('login', [HomeController::class, 'login'])->name('login');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
