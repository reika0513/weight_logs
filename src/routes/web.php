<?php

use App\Http\Controllers\WeightController;
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

Route::get('/weight_logs', [WeightController::class, 'index']);
Route::get('/weight_logs/store', [WeightController::class, 'store']);
Route::get('/weight_logs/detail', [WeightController::class, 'detail']);
Route::post('/weight_logs/create', [WeightController::class, 'create']);
