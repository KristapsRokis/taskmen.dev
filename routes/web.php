<?php

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

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

//Visi uzdevumi
Route::get('/', [TaskController::class, 'index'])->middleware('auth')->name('tasks');

//Kārtot pēc termiņa
Route::get('/termins', [TaskController::class, 'termins'])->middleware('auth');

//Kārtot pēc prioritātes
Route::get('/prioritate', [TaskController::class, 'prioritate'])->middleware('auth');

//Kārtot pēc statusa
Route::get('/statuss', [TaskController::class, 'statuss'])->middleware('auth');

//Izveidot uzdevumu
Route::get('/task/create', [TaskController::class, 'create'])->middleware('admin');

//Rediģēt uzdevumu
Route::get('/task/{task}/edit', [TaskController::class, 'edit'])->middleware('admin');

//Atjaunot uzdevumu
Route::put('/task/{task}/edit', [TaskController::class, 'update'])->middleware('auth');

//Iesniegt uzdevumu
Route::put('/task/{task}', [TaskController::class, 'updatestatus'])->middleware('auth');

//Dzēst uzdevumu
Route::delete('/task/{task}', [TaskController::class, 'destroy'])->middleware('admin');

//Saglabāt uzdevumu
Route::post('/task', [TaskController::class, 'store'])->middleware('auth');

//Viens uzdevums
Route::get('/task/{task}', [TaskController::class, 'show'])->middleware('auth');

//Izveidot lietotāju
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Saglabāt lietotāju
Route::post('/users', [UserController::class, 'store']);

//Izrakstīties
Route::post('/logout', [UserController::class, 'logout']);

//Pierakstīties forma
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Pierakstīties
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
