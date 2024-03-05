<?php

use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\JalurPenerimaanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TimPmbController;
use App\Http\Controllers\UserController;
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

// authentication

Route::middleware(['guest'])->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {

    Route::get('/home', function () {
        return redirect('/dashboard');
    });

    Route::get('/logout', [LoginController::class, 'logout']);
    // end authentication
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard')
        ->middleware('userAkses:admin');
    // kategori
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::get('/kategori/create', [KategoriController::class, 'create']);
    Route::post('/kategori/create', [KategoriController::class, 'create_action']);
    Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit']);
    Route::post('/kategori/{id}/edit', [KategoriController::class, 'edit_action']);
    Route::get('/kategori/{id}/delete', [KategoriController::class, 'delete_action']);

    // informasi
    Route::get('/info', [InformasiController::class, 'index'])->name('info');
    Route::get('/informasi/create', [InformasiController::class, 'create']);
    Route::post('/informasi/create', [InformasiController::class, 'create_action']);
    Route::get('/informasi/{id}/edit', [InformasiController::class, 'edit']);
    Route::post('/informasi/{id}/edit', [InformasiController::class, 'edit_action']);
    Route::get('/informasi/{id}/delete', [InformasiController::class, 'delete_action']);
    Route::post('/upload', [InformasiController::class, 'upload'])->name('ckeditor.upload');
    Route::get('/informasi/{id}/detail', [InformasiController::class, 'detail']);

    // beasiswa
    Route::get('/info-beasiswa', [BeasiswaController::class, 'index'])->name('info-beasiswa');
    Route::get('/beasiswa/create', [BeasiswaController::class, 'create']);
    Route::post('/beasiswa/create', [BeasiswaController::class, 'create_action']);
    Route::get('/beasiswa/{id}/edit', [BeasiswaController::class, 'edit']);
    Route::post('/beasiswa/{id}/edit', [BeasiswaController::class, 'edit_action']);
    Route::get('/beasiswa/{id}/delete', [BeasiswaController::class, 'delete_action']);
    Route::get('/beasiswa/{id}/detail', [BeasiswaController::class, 'detail']);

    // Tim Pmb
    Route::get('/team-pmb', [TimPmbController::class, 'index'])->name('team-pmb');
    Route::get('/team-pmb/create', [TimPmbController::class, 'create']);
    Route::post('/team-pmb/create', [TimPmbController::class, 'create_action']);
    Route::get('/team-pmb/{id}/edit', [TimPmbController::class, 'edit']);
    Route::post('/team-pmb/{id}/edit', [TimPmbController::class, 'edit_action']);
    Route::get('/team-pmb/{id}/delete', [TimPmbController::class, 'delete_action']);
    Route::get('/team-pmb/{id}/detail', [TimPmbController::class, 'detail']);

    // Jalur penerimaan
    Route::get('/jalur-penerimaan', [JalurPenerimaanController::class, 'index'])->name('jalur-penerimaan');
    Route::get('/jalur-penerimaan/create', [JalurPenerimaanController::class, 'create']);
    Route::post('/jalur-penerimaan/create', [JalurPenerimaanController::class, 'create_action']);
    Route::get('/jalur-penerimaan/{id}/edit', [JalurPenerimaanController::class, 'edit']);
    Route::post('/jalur-penerimaan/{id}/edit', [JalurPenerimaanController::class, 'edit_action']);
    Route::get('/jalur-penerimaan/{id}/delete', [JalurPenerimaanController::class, 'delete_action']);
    Route::get('/jalur-penerimaan/{id}/detail', [JalurPenerimaanController::class, 'detail']);
});
