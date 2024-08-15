<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::resource('items', ItemController::class);
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/items/{item}/adjust', [ItemController::class, 'showAdjustForm'])->name('items.adjust');
Route::post('/items/{item}/adjust', [ItemController::class, 'adjustQuantity'])->name('items.adjustQuantity');


Route::middleware('auth.custom')->group(function () {
    Route::resource('items', ItemController::class);
});
