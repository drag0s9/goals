<?php

use App\Http\Controllers\GoalController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [GoalController::class, 'index'])->name('index');
Route::post('/', [GoalController::class, 'store'])->name('store');
Route::get('/goals/create', [GoalController::class, 'create'])->name('create');
Route::get('/goals/{goal}/edit', [GoalController::class, 'edit'])->name('goals.edit');
Route::put('/goals/{goal}', [GoalController::class, 'update'])->name('goals.update');
Route::delete('/goals/{goal}', [GoalController::class, 'destroy'])->name('goals.destroy');
