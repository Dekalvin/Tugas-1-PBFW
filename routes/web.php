<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;

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

Route::get('/landingpage', function () {
    return view('landingpage');
});

Route::get('/fitur', function () {
    return view('fitur');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal');