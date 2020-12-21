<?php

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

Route::get('/', [App\Http\Controllers\PagesController::class, 'home'])->name('page.home');

Auth::routes();

Route::get('/v1/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

// page routes
Route::get('/v1/pages', [App\Http\Controllers\PagesController::class, 'index'])->name('page.index');
Route::get('/v1/page/builder', [App\Http\Controllers\PagesController::class, 'builder'])->name('page.builder');
Route::post('/v1/page/store', [App\Http\Controllers\PagesController::class, 'store'])->name('page.store');

Route::get('/{page}', [App\Http\Controllers\PagesController::class, 'render'])->name('page.render');

