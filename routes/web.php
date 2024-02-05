<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\KategoriController;
use App\Http\Controllers\admin\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\test\TestingController;
use App\Http\Controllers\user\UserController;
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

// route user
Route::get('/', [UserController::class, 'index'])->name('user');
Route::get('/kategori/{id}', [UserController::class, 'show'])->name('kategori-detail');

// route admin
Route::middleware(['auth', 'verified'])->group(function() {
    // Route Dashboard bang
    Route::controller(DashboardController::class)->group(function() {
        Route::get('/dashboard', 'index')->name('admin.dashboard');
    });

    // Route Kategori
    Route::controller(KategoriController::class)->group(function() {
        Route::get('/kategori', 'index')->name('admin.kategori');
        Route::get('/kategori/create', 'create')->name('admin.kategori.create');
        Route::post('/kategori/store', 'store')->name('admin.kategori.store');
        Route::get('/kategori/{id}/detail', 'show')->name('admin.kategori.detail');
    });

    // Route produk
    Route::controller(ProdukController::class)->group(function() {
        Route::get('/produk', 'index')->name('admin.produk');
        Route::get('/produk/create', 'create')->name('admin.produk.create');
        Route::post('/produk/store', 'store')->name('admin.produk.store');
        Route::get('/produk/{id}/download', 'download')->name('admin.produk.download');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
