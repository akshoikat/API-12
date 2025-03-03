<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AdminController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/ad/{adminId}/{posterId}/{device}', [AdminController::class, 'sendDataToAPI']);
Route::post('/login', [AdminController::class, 'login']);