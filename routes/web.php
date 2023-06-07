<?php

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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('/user')->middleware(['auth'])->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user');

});

Route::prefix('/cars')->middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'explore'])->name('explore');
    Route::get('/{id}/detail', [HomeController::class, 'detail'])->name('detail');
    Route::get('/{id}/checkout', [HomeController::class, 'checkout'])->name('checkout');

});
