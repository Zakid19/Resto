<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TableController;
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


Route::middleware('guest')->group(function() {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});


Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');

    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');



});

Route::get('category', [CategoryController::class, 'index']);
Route::post('category', [CategoryController::class, 'store']);
Route::get('category/{category}/show', [CategoryController::class, 'show']);
Route::put('category/{category}/update', [CategoryController::class, 'update']);
Route::delete('category/{category}/delete', [CategoryController::class, 'destroy']);


Route::get('menu', [MenuController::class, 'index']);
Route::post('menu', [MenuController::class, 'store']);
Route::get('menu/{menu}/show', [MenuController::class, 'show']);
Route::put('menu/{menu}/update', [MenuController::class, 'update']);
Route::delete('menu/{menu}/delete', [MenuController::class, 'destroy']);


Route::get('table', [TableController::class, 'index']);
Route::post('table', [TableController::class, 'store']);
Route::get('table/{table}/show', [TableController::class, 'show']);
Route::put('table/{table}/update', [TableController::class, 'update']);
Route::delete('table/{table}/delete', [TableController::class, 'destroy']);


Route::get('reservation', [ReservationController::class, 'index']);
Route::post('reservation', [ReservationController::class, 'store']);
Route::get('reservation/{reservation}/show', [ReservationController::class, 'show']);
Route::put('reservation/{reservation}/update', [ReservationController::class, 'update']);
Route::delete('reservation/{reservation}/delete', [ReservationController::class, 'destroy']);
