<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use \App\Http\Controllers\CategoryController;
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
    return view('main');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('user', [UserController::class, 'index'])->name('user');
    Route::get('user-create', [UserController::class, 'create'])->name('user.create');
    Route::post('user-store', [UserController::class, 'store'])->name('user.store');

    Route::get('user-edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('user-update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('user-delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');

    Route::resource('category', CategoryController::class);
});

Auth::routes();
