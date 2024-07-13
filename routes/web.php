<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PegawaiController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login_proses']);
});

Route::get('/home', function () {
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/user', [AdminController::class, 'user'])->middleware('userAkses:user');
    Route::get('/logout', [AuthController::class, 'logout']);
});

Route::get('/pegawai', [PegawaiController::class, 'index'])->name('index');
Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('create');
Route::post('/pegawai', [PegawaiController::class, 'store'])->name('store');
