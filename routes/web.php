<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;

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
    return view('landing', ['title' => 'SIMANIS']);
});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('actionlogin', [AuthController::class, 'actionlogin'])->name('actionlogin');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('actionregister', [AuthController::class, 'actionregister'])->name('actionregister');

Route::get('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

    Route::get('dashboard', [DashboardController::class, 'dashboard'])->middleware('auth')->name('dashboard');

    // Route::get('pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran.index');
    // Route::get('pendaftaran/create', [PendaftaranController::class, 'create'])->name('pendaftaran.create');
    // Route::post('pendaftaran/store', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
    // Route::get('pendaftaran/edit/{id}', [PendaftaranController::class, 'edit'])->name('pendaftaran.edit');
    // Route::post('pendaftaran/update/{id}', [PendaftaranController::class, 'update'])->name('pendaftaran.update');

    Route::resource('pendaftaran', PendaftaranController::class);
});
