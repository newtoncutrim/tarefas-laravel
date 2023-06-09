<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TaskController;
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
Route::middleware(['auth'])->group(function(){

    Route::get('/', [SiteController::class, 'index'])->name('home');
    Route::get('/task/new', [TaskController::class, 'new'])->name('task.new');
    Route::post('/task/create_action', [TaskController::class, 'create_action'])->name('task.create_action');
    Route::get('/task/edit', [TaskController::class, 'edit'])->name('task.edit');
    Route::post('/task/edit_action', [TaskController::class, 'edit_action'])->name('task.edit_action');
    Route::get('/task/delete', [TaskController::class, 'delete'])->name('task.delete');
    Route::get('/logout', [AuthController::class, 'logout'])->name('user.logout');
    Route::get('/task', [TaskController::class, 'index'])->name('task.index');
    Route::post('/taskUpdate', [TaskController::class, 'taskUpdate'])->name('taskUpdate');
});



Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'login_action'])->name('user.login_action');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register_action'])->name('user.register_action');



