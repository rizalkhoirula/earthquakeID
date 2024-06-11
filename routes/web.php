<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GempaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\User\LandingController;
use App\Http\Controllers\VisualisasiGempaController;


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

# Auth Controller
Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('IsLogin');

# Dashboard Controller
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('IsLogin');

# Gempa Controller
Route::get('/gempa', [GempaController::class, 'index'])->middleware('IsLogin');
Route::post('/gempa', [GempaController::class, 'store'])->middleware('IsLogin');
Route::put('/gempa/{id}', [GempaController::class, 'update'])->middleware('IsLogin');
Route::delete('/gempa/{id}', [GempaController::class, 'destroy'])->middleware('IsLogin');

# Visualisasi Gempa Controller
Route::get('/visualisasi-gempa', [VisualisasiGempaController::class, 'index'])->middleware('IsLogin');

# Landing
Route::get('/', [LandingController::class, 'index']);
Route::get('/detail/{id}', [LandingController::class, 'detail']);

