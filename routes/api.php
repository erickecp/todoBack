<?php

use App\Http\Controllers\categoriaController;
use App\Http\Controllers\tareaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(categoriaController::class)->group(function () {
    Route::post('nuevaCategoria', 'newCategory');
});


Route::controller(tareaController::class)->group(function () {
    Route::post('nuevaTarea', 'newTask');
});
