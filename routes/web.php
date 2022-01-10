<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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

Route::get('/cars/{car}',[CarController::class,'show'])->name('cars.show');

Route::get('/index', [CarController::class,'index']);

Route::get('cars.create', [CarController::class, 'create'])->name('cars.create');

Route::post('cars.create', [CarController::class, 'create_post']);