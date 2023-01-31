<?php

use App\Http\Controllers\AdminDesaController;
use App\Http\Controllers\AdminKecamatanController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\PublicKecamatanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('backend.master');
// });


// Route Kota
Route::get('/', [KotaController::class, 'index'])->name('Kota.index');


// Admin Desa Dashboard
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/desa/kampung-gadang', [AdminDesaController::class, 'kp_gadang'])->name('desa.kampunggadang');
});

// Publick Kecamatan
Route::group(['prefix' => 'kecamatan'], function () {
    Route::get('/pariaman/utara', [PublicKecamatanController::class, 'utara'])->name('kec.utara');
    Route::get('/pariaman/selatan', [PublicKecamatanController::class, 'selatan'])->name('kec.selatan');
    Route::get('/pariaman/timur', [PublicKecamatanController::class, 'timur'])->name('kec.timur');
    Route::get('/pariaman/tengah', [PublicKecamatanController::class, 'tengah'])->name('kec.tengah');
});


// Admin Kecamtan Dashboard
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/kecamatan-pariaman-utara', [AdminKecamatanController::class, 'utara'])->name('adkec.utara');
    Route::get('/kecamatan-pariaman-selatan', [AdminKecamatanController::class, 'selatan'])->name('adkec.selatan');
    Route::get('/kecamatan-pariaman-timur', [AdminKecamatanController::class, 'timur'])->name('adkec.timur');
    Route::get('/kecamatan-pariaman-tengah', [AdminKecamatanController::class, 'tengah'])->name('adkec.tengah');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
