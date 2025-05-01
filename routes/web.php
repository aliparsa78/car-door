<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarCategoryController;
use App\Http\Controllers\CarController;

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

Route::get('/', function () {
    return view('Frontend.index');
});
Route::get('/404',function(){
    return view('/404');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',[UserController::class,'index'])->name('dashboard');
});

Route::middleware(['auth','user'])->group(function(){
    Route::get('/user_dashboard',[UserController::class,'dashboard']);
});
// Admin routes
Route::middleware(['auth','admin'])->group(function(){
    Route::resource('car_category',CarCategoryController::class);
    Route::resource('cars',CarController::class);
});
