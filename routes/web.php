<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

});

Route::prefix('/user')->middleware(['auth'])->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user');

});

Route::prefix('/explores')->middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'explore'])->name('explore');
    Route::get('/{id}/detail', [HomeController::class, 'detail'])->name('detail');
    Route::get('/{id}/checkout', [HomeController::class, 'checkout'])->name('checkout');
    
});

Route::prefix('cars')->group(function () {
    Route::get('/', [CarController::class, 'index'])->name('cars');
    Route::post('/', [CarController::class, 'store'])->name('cars.store');
    Route::get('/{id}/show', [CarController::class, 'show'])->name('cars.show');
    Route::put('/{id}', [CarController::class, 'update'])->name('cars.update');
    Route::delete('/{id}', [CarController::class, 'destroy'])->name('cars.destroy');
    
});

Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories');
    Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/{id}/show', [CategoryController::class, 'show'])->name('categories.show');
    Route::put('/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    
});
