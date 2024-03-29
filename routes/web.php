<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\SubCategory\SubCategoryController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/', fn() => redirect()->to('/login'));
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::group([ 'prefix' => 'user' , 'middleware' => 'auth'], fn() => [
    Route::get('/create', [UserController::class, 'create'])->name('user.create'),
    Route::post('/store', [UserController::class, 'store'])->name('user.store'),
    Route::get('/list', [UserController::class, 'index'])->name('user.list'),
    Route::put('/edit/{user_id}', [UserController::class, 'edit'])->name('user.edit'),
    Route::delete('/destroy/{user_id}', [UserController::class, 'destroy'])->name('user.destroy')
]);

Route::get('category/list', [CategoryController::class, 'index'])->name('category.list');

Route::group(['prefix' => 'category', 'middleware' => 'auth'], fn() => [
    Route::get('/create', [CategoryController::class, 'create'])->name('category.create'),
    Route::post('/store', [CategoryController::class, 'store'])->name('category.store'),
    Route::get('/show/{id}', [CategoryController::class, 'show'])->name('category.show'),
    Route::put('/edit/{id}', [CategoryController::class, 'update'])->name('category.edit'),
    Route::delete('/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy')
]);

Route::group(['prefix' => 'sub/category', 'middleware' => 'auth'], fn() => [
    Route::get('/show/{id}', [SubCategoryController::class, 'show'])->name('sub.category.list')
]);
