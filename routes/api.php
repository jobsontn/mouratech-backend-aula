<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function (){
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::apiResource('students', StudentController::class);
    Route::apiResource('tokens', TokenController::class)->only(['store', 'destroy']);
});

Route::post('/login', [AuthController::class, 'authenticate'])->name('login');

Route::apiResource('students2', StudentController::class);
