<?php

use App\Http\Controllers\Api\LeadController;
use App\Http\Controllers\Api\LogController;
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

Route::get('/leads', [LeadController::class, 'index']);
Route::post('/leads/{id}/attach-contact', [LeadController::class, 'attachContact']);
Route::get('/logs', [LogController::class, 'index']);
