<?php

use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RentalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Models\kendaraan;

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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
});



// Kendaraan
Route::get('/tambah', [KendaraanController::class, 'add'])->name('tambah');
Route::get('/kendaraan', [KendaraanController::class, 'index'])->name('kendaraan');
Route::post('/kendaraan', [KendaraanController::class, 'store'])->name('kendaraan.tambah');

// Peminjaman
Route::get('/peminjaman/{vehicle_id}/{customer_id}', [RentalController::class, 'pinjam'])->name('peminjaman');


// User
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
