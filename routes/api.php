<?php

use App\Http\Controllers\AgentController;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/agents', [AgentController::class, 'index']);

Route::get('/agent/{id}', [AgentController::class, 'show']);
