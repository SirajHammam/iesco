<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return view('home');
});

Route::get('/login', [LoginController::class, 'index'])->middleware("guest");
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware("guest");
Route::post('/register', [RegisterController::class, 'store']);

Route::middleware(['auth:sanctum', 'verified',])->group(function(){

    Route::get('/admin', [LoginController::class, 'index2']);

    Route::get('/event', [EventController::class, 'index']);
    Route::post('/event', [EventController::class, 'store']);
    Route::get('/show/{slug}', [EventController::class, 'show']);
    
    Route::get('/edit/{slug}', [EventController::class, 'edit']);
    Route::put('/update/{slug}', [EventController::class, 'update']);

    Route::delete('/event/{id}', [EventController::class, 'hapus']);
});