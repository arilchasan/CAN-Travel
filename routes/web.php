<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\GeneralController;
use App\Http\Middleware\AdminAuth;
use GuzzleHttp\Middleware;

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

Route::get('/', [GeneralController::class, 'beranda']);
Route::get('/search', [GeneralController::class, 'search']);
Route::get('/detail-bus/{id}', [BusController::class, 'detail']);
Route::get('/pesan-tiket/{bus_id}', [BookingController::class, 'pesanTiket'])->name('pesan-tiket');
Route::get('/tiket-saya', [BookingController::class, 'showTiket'])->name('tiket-saya');
///login-register-admin
Route::get('/login', [GeneralController::class, 'login']);
Route::get('/login-admin', [GeneralController::class, 'loginAdmin'])->name('login-admin');
Route::get('/register', [GeneralController::class, 'register']);
Route::post('/authLogin', [AuthController::class, 'authLogin']);
Route::post('/authRegister', [AuthController::class, 'authRegister']);
Route::post('/authAdmin', [AdminController::class, 'adminLogin']);
Route::get('/adminLogout', [AdminController::class, 'adminLogout']);
Route::post('/logout', [AuthController::class, 'authLogout'])->name('logout');

///--------------Admin-----------------///
Route::middleware([AdminAuth::class])->group( function() {
    Route::group(['prefix' => '/admin'], function () {
        Route::get('/dashboard', [GeneralController::class, 'adminDashboard']);
        Route::group(['prefix' => '/data-bus'], function () {
            Route::get('/', [GeneralController::class, 'adminData']);
            Route::get('/detail/{id}', [BusController::class, 'detailBus']);
            Route::get('/tambah', [BusController::class, 'create']);
            Route::post('/tambah', [BusController::class, 'store']);
            Route::get('/edit/{id}', [BusController::class, 'edit']);
            Route::post('/update/{id}', [BusController::class, 'update']);
            Route::delete('/hapus/{id}', [BusController::class, 'destroy']);
        });
        Route::get('/data-user', [GeneralController::class, 'dataUser']);
    });
});
