<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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
Route::get('/', [BlogController::class, 'showList'])->name('blogs');


Route::get('/blog/create', [BlogController::class, 'showCreate'])->name('create');

Route::post('/blog/store', [BlogController::class, 'exeStore'])->name('store');

Route::get('/blog/{id}', [BlogController::class, 'showDetail'])->name('show');

Route::get('/blog/edit/{id}', [BlogController::class, 'showEdit'])->name('edit');

Route::post('/blog/update', [BlogController::class, 'exeUpdate'])->name('update');

Route::post('/blog/delete/{id}', [BlogController::class, 'exeDelete'])->name('delete');