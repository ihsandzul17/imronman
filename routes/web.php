<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\VillageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Middleware\AdminMiddleware;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('home');
});

// Login Routes
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

// Register Routes
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// Dashboard
Route::get('/dashboard', [PengaduanController::class, 'index'])->name('dashboard')->middleware('auth');
Route::post('/dashboard', [PengaduanController::class, 'store'])->name('pengaduan.store');
Route::post('/logout', [PengaduanController::class, 'logout'])->name('logout');
Route::get('/dashboard/detail/{id}', [DashboardController::class, 'show'])->name('dashboard.detail');
Route::get('/dashboard/filter', [DashboardController::class, 'filter'])->name('dashboard.filter');

Route::post('/vote/{id}', [PengaduanController::class, 'vote'])->name('pengaduan.vote');
Route::post('/view/{id}', [PengaduanController::class, 'view'])->name('pengaduan.view');

// Form Report
Route::get('/cities/{province_id}', [LocationController::class, 'getCities']);
Route::get('/districts/{city_id}', [DistrictController::class, 'getDistrictsByCity']);
Route::get('/villages/{district_id}', [VillageController::class, 'getVillagesByDistrict']);

// Admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');
Route::get('/admin/index', [AdminController::class, 'index'])->middleware('admin');
Route::get('/admin/detail-staff', [AdminController::class, 'detailStaff'])->name('admin.detail-staff');
Route::post('/admin/detail-staff', [StaffController::class, 'store'])->name('staff.store');
Route::delete('/admin/detail-staff/{id}', [StaffController::class, 'destroy'])->name('staff.destroy');

// Staff
Route::get('/staff', [StaffController::class, 'index'])->name('staff')->middleware('auth');
Route::get('/staff/index', [StaffController::class, 'index'])->middleware('staff');
Route::get('/staff/show/{id}', [StaffController::class, 'show'])->name('staff.show');

Route::put('/pengaduan/update-status/{id}', [PengaduanController::class, 'updateStatus'])->name('pengaduan.updateStatus');
Route::get('/staff/export', [StaffController::class, 'exportToExcel'])->name('staff.export');



