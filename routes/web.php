<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;


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
Route::get('/tasks',[TasksController::class,'index'])->name('task.index');
Route::get('/tasks/{task}',[TasksController::class, 'show'])->name('task.show');
Route::get('task/create', [TasksController::class,'create'])->name('task.create');
Route::post('/tasks',[TasksController::class,'store'])->name('task.store');
Route::get('task/{task}/edit',[TasksController::class,'edit'])->name('task.edit');
Route::put('task/{task}',[TasksController::class,'update'])->name("task.update");
Route::delete('task/{task}',[TasksController::class,'destroy'])->name('task.destroy');
