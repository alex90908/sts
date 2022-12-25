<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\tampilkan;
use App\Http\Controllers\TesController;
use App\Http\Controllers\UpdateController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/tes", [TesController::class, 'tes']);
Route::post("/usr", [LoginController::class, 'login']);
Route::post("/register", [LoginController::class, 'simpanreg']);
Route::post("/logout", [LoginController::class, 'logout']);
Route::post("/form", [TesController::class, 'formk']);
Route::get("/history", [tampilkan::class, 'welcomeInfo']);
Route::get("/history1", [tampilkan::class, 'tampilkan']);
Route::get("/history2", [tampilkan::class, 'getsepatu']);
Route::get("/history3", [tampilkan::class, 'getuser']);
Route::post("/update", [UpdateController::class, 'update']);




