<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestTableController;
use App\Http\Controllers\AuthController;

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

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('panel', [TestTableController::class, 'index'])->name('panel');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
