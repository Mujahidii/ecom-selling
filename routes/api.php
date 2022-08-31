<?php

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Category\CategoryController;
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

Route::group(['middleware' => ['auth:sanctum'], ['name' => 'api.']], fn() => [
    Route::post('/register', [AuthController::class, 'createUser'])->name('user.register'),
    Route::post('/login', [AuthController::class, 'loginUser'])->name('user.login'),
    Route::group(['prefix' => 'category'], fn() => [
        Route::get('/index', [CategoryController::class, 'index'])->name('category.name'),
    ]),
]);

