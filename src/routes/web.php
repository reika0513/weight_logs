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

Route::get('/weight_logs/store', [WeightController::class, 'store']);
Route::post('/weight_logs/create', [WeightController::class, 'create']);
Route::get('/wight_logs/goal_setting/form', [WeightController::class, 'goal']);
Route::post('/weight_logs/weightLogId', [WeightController::class, 'detail']);

Route::middleware('auth')->group(function () {
    Route::get('/weight_logs', [WeightController::class, 'index']);
    Route::post('/logout', [WeightController::class, 'logout']);
    Route::post('/wight_logs/goal_setting', [WeightController::class, 'target']);
});