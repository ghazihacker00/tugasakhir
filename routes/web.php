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

use App\Http\Controllers\ApiTTEController;

Route::get('/layanan/api-tte', [ApiTTEController::class, 'create'])->name('api-tte.create');
Route::post('/layanan/api-tte', [ApiTTEController::class, 'store'])->name('api-tte.store');
Route::get('/layanan/api-tte/tiket/{kode_tiket}', [ApiTTEController::class, 'showTicket'])->name('api-tte.ticket');

Route::get('/profil/tupoksi', function () {
    return view('tupoksi');
});

Route::get('/profil/program', function () {
    return view('program');
});


use App\Http\Controllers\PanduanController;

Route::get('/panduan', [PanduanController::class, 'index'])->name('panduan.index');


use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminAuthMiddleware;
use App\Http\Controllers\Admin\ESignController as AdminESignController;
use App\Http\Controllers\Admin\VulnerabilityAssessmentController as AdminVulnerabilityAssessmentController;
use App\Http\Controllers\Admin\EmailRequestController as AdminEmailRequestController;
use App\Http\Controllers\Admin\ApiTTEController as AdminApiTTEController;
use App\Http\Controllers\Admin\PengaduanController as AdminPengaduanController;

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login']);
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::middleware([AdminAuthMiddleware::class])->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        Route::get('/e-sign', [AdminESignController::class, 'index'])->name('admin.e-sign.index');
        Route::get('/e-sign/{id}/edit', [AdminESignController::class, 'edit'])->name('admin.e-sign.edit');
        Route::put('/e-sign/{id}', [AdminESignController::class, 'update'])->name('admin.e-sign.update');
        Route::delete('/e-sign/{id}', [AdminESignController::class, 'destroy'])->name('admin.e-sign.destroy');
        Route::post('/e-sign/{id}/update-status', [AdminESignController::class, 'updateStatus'])->name('admin.e-sign.updateStatus');

        Route::get('/vulnerability-assessment', [AdminVulnerabilityAssessmentController::class, 'index'])->name('admin.vulnerability-assessment.index');
        Route::get('/vulnerability-assessment/{id}/edit', [AdminVulnerabilityAssessmentController::class, 'edit'])->name('admin.vulnerability-assessment.edit');
        Route::put('/vulnerability-assessment/{id}', [AdminVulnerabilityAssessmentController::class, 'update'])->name('admin.vulnerability-assessment.update');
        Route::delete('/vulnerability-assessment/{id}', [AdminVulnerabilityAssessmentController::class, 'destroy'])->name('admin.vulnerability-assessment.destroy');
        Route::post('/vulnerability-assessment/{id}/update-status', [AdminVulnerabilityAssessmentController::class, 'updateStatus'])->name('admin.vulnerability-assessment.updateStatus');

        
        Route::get('/email', [AdminEmailRequestController::class, 'index'])->name('admin.email.index');
        Route::get('/email/{id}/edit', [AdminEmailRequestController::class, 'edit'])->name('admin.email.edit');
        Route::put('/email/{id}', [AdminEmailRequestController::class, 'update'])->name('admin.email.update');
        Route::delete('/email/{id}', [AdminEmailRequestController::class, 'destroy'])->name('admin.email.destroy');
        Route::post('/email/{id}/update-status', [AdminEmailRequestController::class, 'updateStatus'])->name('admin.email.updateStatus');

        Route::get('/api-tte', [AdminApiTTEController::class, 'index'])->name('admin.api-tte.index');
        Route::get('/api-tte/{id}/edit', [AdminApiTTEController::class, 'edit'])->name('admin.api-tte.edit');
        Route::put('/api-tte/{id}', [AdminApiTTEController::class, 'update'])->name('admin.api-tte.update');
        Route::delete('/api-tte/{id}', [AdminApiTTEController::class, 'destroy'])->name('admin.api-tte.destroy');
        Route::post('/api-tte/{id}/update-status', [AdminApiTTEController::class, 'updateStatus'])->name('admin.api-tte.updateStatus');

        Route::get('/pengaduan', [AdminPengaduanController::class, 'index'])->name('admin.pengaduan.index');
        Route::get('/pengaduan/{id}/edit', [AdminPengaduanController::class, 'edit'])->name('admin.pengaduan.edit');
        Route::put('/pengaduan/{id}', [AdminPengaduanController::class, 'update'])->name('admin.pengaduan.update');
        Route::delete('/pengaduan/{id}', [AdminPengaduanController::class, 'destroy'])->name('admin.pengaduan.destroy');
        
        Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');

        // Route untuk halaman alasan penolakan
        Route::get('/admin/e-sign/{id}/rejected', [App\Http\Controllers\Admin\ESignController::class, 'rejected'])->name('admin.e-sign.rejected');
        Route::post('/admin/e-sign/{id}/rejected', [App\Http\Controllers\Admin\ESignController::class, 'submitRejectionReason'])->name('admin.e-sign.submitRejectionReason');

        Route::get('/admin/email/{id}/rejected', [App\Http\Controllers\Admin\EmailRequestController::class, 'rejected'])->name('admin.email.rejected');
        Route::post('/admin/email/{id}/rejected', [App\Http\Controllers\Admin\EmailRequestController::class, 'submitRejectionReason'])->name('admin.email.submitRejectionReason');

        Route::get('/admin/api-tte/{id}/rejected', [App\Http\Controllers\Admin\ApiTTEController::class, 'rejected'])->name('admin.api-tte.rejected');
        Route::post('/admin/api-tte/{id}/rejected', [App\Http\Controllers\Admin\ApiTTEController::class, 'submitRejectionReason'])->name('admin.api-tte.submitRejectionReason');

        Route::get('/admin/vulnerability-assessment/{id}/rejected', [App\Http\Controllers\Admin\VulnerabilityAssessmentController::class, 'rejected'])->name('admin.vulnerability-assessment.rejected');
        Route::post('/admin/vulnerability-assessment/{id}/rejected', [App\Http\Controllers\Admin\VulnerabilityAssessmentController::class, 'submitRejectionReason'])->name('admin.vulnerability-assessment.submitRejectionReason');





        Route::get('/email', [AdminEmailRequestController::class, 'index'])->name('admin.email.index');
        Route::get('/api-tte', [AdminApiTTEController::class, 'index'])->name('admin.api-tte.index');
        Route::get('/pengaduan', [AdminPengaduanController::class, 'index'])->name('admin.pengaduan.index');
    });
});
