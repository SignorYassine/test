<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\entertainmentController;
use App\Http\Controllers\administration;

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



Route::get('/', [entertainmentController::class, 'index'])->name('home');
Route::get('/TvShow', [entertainmentController::class, 'tvshows'])->name('tvshow');
Route::get('/Anime', [entertainmentController::class, 'anime'])->name('anime');
Route::get('/Movie', [entertainmentController::class, 'movie'])->name('movie');
Route::get('/Games', [entertainmentController::class, 'games'])->name('games');
Route::get('/Info/{id}', [entertainmentController::class, 'info'])->name('info');
Route::get('/add-entertainment', [entertainmentController::class, 'create'])->middleware('admin');
Route::post('/add-entertainment', [entertainmentController::class, 'store'])->middleware('admin');
Route::get('/list', [administration::class, 'list'])->name('list')->middleware('admin');
Route::get('/list/edit/{id}', [administration::class, 'edit'])->name("list.edit")->middleware('admin');
Route::post('/list/update/{id}', [administration::class, 'update'])->name("list.update")->middleware('admin');
Route::get('/list/check/{id}', [administration::class, 'check'])->name('list.check')->middleware('admin');
Route::get('/list/filter', [administration::class, 'filter'])->name('list.filter')->middleware('admin');
Route::get('/list/search', [administration::class, 'search'])->name('list.search')->middleware('admin');
Route::get('/user', [administration::class, 'user'])->name('admin.user')->middleware('admin');
Route::get('/list/check_user/{id}', [administration::class, 'chekck_user'])->name('user.check')->middleware('admin');
Route::delete('/list/delete/{id}', [administration::class, 'delete_user'])->name('user.remove')->middleware('admin');
Route::delete('/list/delete/{id}', [administration::class, 'delete'])->name('list.delete')->middleware('admin');
Route::post('/rating', [entertainmentController::class, 'rating'])->name('rating')->middleware('auth');
Route::post('/comment', [entertainmentController::class, 'comments'])->name('comment')->middleware('auth');
Route::delete('/delete_comment/{id}', [entertainmentController::class, 'remove_commnent'])->name('delete_comment')->middleware('auth');
Route::get('search', [entertainmentController::class, 'search'])->name('entertanment.search')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
