<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PengaduanController;

Route::get('/pengaduan', [PengaduanController::class, 'create'])->name('pengaduan.create');
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');

use App\Http\Controllers\ESignController;

Route::get('/layanan/e-sign', [ESignController::class, 'create'])->name('e-sign.create');
Route::post('/layanan/e-sign', [ESignController::class, 'store'])->name('e-sign.store');
Route::get('/layanan/e-sign/tiket/{kode_tiket}', [ESignController::class, 'showTicket'])->name('e-sign.ticket');


use App\Http\Controllers\VulnerabilityAssessmentController;

Route::get('/layanan/vulnerability-assessment', [VulnerabilityAssessmentController::class, 'create'])->name('vulnerability-assessment.create');
Route::post('/layanan/vulnerability-assessment', [VulnerabilityAssessmentController::class, 'store'])->name('vulnerability-assessment.store');
Route::get('/layanan/vulnerability-assessment/tiket/{kodeTiket}', [VulnerabilityAssessmentController::class, 'ticket'])->name('vulnerability-assessment.ticket');


use App\Http\Controllers\EmailRequestController;

Route::get('/layanan/e-mail', [EmailRequestController::class, 'create'])->name('email.create');
Route::post('/layanan/e-mail', [EmailRequestController::class, 'store'])->name('email.store');
Route::get('/layanan/e-mail/tiket/{kode_tiket}', [EmailRequestController::class, 'tiket'])->name('email.tiket');

use App\Http\Controllers\CekTiketController;

Route::get('/cek-tiket', [CekTiketController::class, 'index'])->name('cek-tiket.index');
Route::post('/cek-tiket', [CekTiketController::class, 'cek'])->name('cek-tiket.cek');






use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminAuthMiddleware;

// Rute untuk login dan logout admin
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login']);
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    // Rute yang dilindungi oleh middleware auth untuk admin
    Route::middleware([AdminAuthMiddleware::class])->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    });
});
