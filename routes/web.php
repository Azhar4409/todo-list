<?php

use App\Http\Controllers\Halo\HaloController;
use App\Http\Controllers\Todo\TodoController;
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

Route::get('/halo', [HaloController::class,'coba']);

Route::get('/todo',[TodoController::class,'index'])->name('todo');
Route::post('/todo',[TodoController::class,'store'])->name('todo.post');
Route::put('/todo/{id}',[TodoController::class,'update'])->name('todo.update');
Route::delete('/todo/{id}',[TodoController::class,'destroy'])->name('todo.delete');