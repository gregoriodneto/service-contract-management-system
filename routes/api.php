<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Middleware\RoleMiddleware;

Route::post('/login', [AuthController::class,'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', fn() => auth()->user());

    Route::get("/test", [TestController::class, "index"])
        ->middleware(RoleMiddleware::class . ":admin");
});
