<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\picController;

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
    return view('welcome');
});

Route::get('/pic', [picController::class, 'index']);
Route::get('/add-pic', [picController::class, 'create']);
Route::post('/add-pic', [picController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
