<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;




Route::get('/', [PostController::class,'index']);




// routes/web.php
// routes/web.php
Route::get('/check/{admin_id}/{poster_id}', [PageController::class, 'showPage']);




Route::get('/admin/data', [AdminController::class, 'showForm'])->name('admin.form');
Route::post('/admin/data', [AdminController::class, 'submitForm']);