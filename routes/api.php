<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminTransferController;

Route::post('/transfer-admin-data', [AdminTransferController::class, 'transferData']);



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
