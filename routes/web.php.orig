<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TipeController;
use App\Http\Controllers\TransaksiController;

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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/post', [PostController::class, 'show'])->middleware('auth');

Route::resource('/dashboard/admin/laporan', TransaksiController::class)->middleware('admin');

Route::resource('/dashboard/admin/kategori', CategoryController::class)->middleware('admin');

Route::resource('/dashboard/admin/tipe', TipeController::class)->middleware('admin');

Route::resource('/dashboard/admin/pelanggan', PelangganController::class)->middleware('admin');

// Route::resource('/dashboard/admin', AdminController::class)->middleware('admin')->name('admin.dashboard');

Route::middleware(['admin'])->group(function () {
    Route::resource('/dashboard/admin', AdminController::class);
});
