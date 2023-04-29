<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Frontend\MenuController as FrontendMenuController;
use App\Http\Controllers\Frontend\ReservationController as FrontendReservationController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TableController;
use App\Models\Reservation;
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




require __DIR__.'/auth.php';


Route::group(['middleware' => 'auth'], function() {

    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

        // Categories
        Route::get('category', [CategoryController::class, 'index'])->name('category.index');
        Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('category', [CategoryController::class, 'store'])->name('category.store');
        Route::get('category/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
        Route::get('category/{category}/show', [CategoryController::class, 'show'])->name('category.show');
        Route::put('category/{category}/update', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('category/{category}/delete', [CategoryController::class, 'destroy'])->name('category.delete');

        // Menus
        Route::get('menu', [MenuController::class, 'index'])->name('menu.index');
        Route::get('menu/create', [MenuController::class, 'create'])->name('menu.create');
        Route::post('menu', [MenuController::class, 'store'])->name('menu.store');
        Route::get('menu/{menu}/edit', [MenuController::class, 'edit'])->name('menu.edit');
        Route::put('menu/{menu}/update', [MenuController::class, 'update'])->name('menu.update');
        Route::delete('menu/{menu}/delete', [MenuController::class, 'destroy'])->name('menu.delete');

        // Table
        Route::get('table', [TableController::class, 'index'])->name('table.index');
        Route::get('table/create', [TableController::class, 'create'])->name('table.create');
        Route::post('table', [TableController::class, 'store'])->name('table.store');
        Route::get('table/{table}/edit', [TableController::class, 'edit'])->name('table.edit');
        Route::put('table/{table}/update', [TableController::class, 'update'])->name('table.update');
        Route::delete('table/{table}/delete', [TableController::class, 'destroy'])->name('table.delete');

        // Reservation
        Route::get('reservation', [ReservationController::class, 'index'])->name('reservation.index');
        Route::get('reservation/create', [ReservationController::class, 'create'])->name('reservation.create');
        Route::post('reservation', [ReservationController::class, 'store'])->name('reservation.store');
        Route::get('reservation/{reservation}/edit', [ReservationController::class, 'edit'])->name('reservation.edit');
        Route::put('reservation/{reservation}/update', [ReservationController::class, 'update'])->name('reservation.update');
        Route::delete('reservation/{reservation}/delete', [ReservationController::class, 'destroy'])->name('reservation.delete');
    });

    Route::group(['middleware' => 'role:user', 'prefix' => 'user'], function () {

    });

    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('welcome', [FrontController::class, 'welcome'])->name('welcome.index');

Route::get('category', [FrontendCategoryController::class, 'index'])->name('category.index');
Route::get('category/{category:name}/show', [FrontendCategoryController::class, 'show'])->name('category.show');
Route::get('menu', [FrontendMenuController::class, 'index'])->name('menu.index');
Route::get('reservation/step-one', [FrontendReservationController::class, 'stepOne'])->name('reservation.stepOne');
Route::post('reservation/step-one', [FrontendReservationController::class, 'storeStepOne'])->name('reservation.storeStepOne');
Route::get('reservation/step-two', [FrontendReservationController::class, 'stepTwo'])->name('reservation.stepTwo');
Route::post('reservation/step-two', [FrontendReservationController::class, 'storeStepTwo'])->name('reservation.storeStepTwo');
