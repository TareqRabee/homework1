<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', [TaskController::class, 'index'])->name('tasks');
Route::post('/insert', [TaskController::class, 'insert'])->name('task.insert');
Route::delete('/delete/{id}', [TaskController::class, 'delete'])->name('task.delete');
Route::put('/edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
