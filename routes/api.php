<?php

use App\Http\Controllers\Api\BarangController;
use App\Http\Controllers\Api\KeranjangController;
use App\Http\Controllers\Api\PelangganController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(BarangController::class)->group(function () {
    Route::get('/barang', 'index');
    Route::get('/barang/{id}', 'show');
});

Route::controller(KeranjangController::class)->group(function () {
    Route::post('/keranjang', 'store');
    Route::get('/keranjang/{id}', 'show');
});

Route::controller(PelangganController::class)->group(function () {
    Route::post('/pelanggan', 'show');
});
