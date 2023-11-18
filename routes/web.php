<?php

use App\Http\Controllers\Home;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use app\Http\Controllers\DashboardController;

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
    return view('index');
});









Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
  
    Route::get('/approval', [DashboardController::class, 'approval'])->name('approval');

    Route::middleware(['approved'])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    
    });

    Route::middleware(['admin'])->group(function () {
        Route::get('/users', [UserController::class,'index'])->name('admin.users.index');
        Route::patch('/users/{user_id}/approve', [UserController::class,'approve'])->name('admin.users.approve');
        Route::patch('/users/{user_id}/disapprove', [UserController::class, 'approve'])->name('admin.users.disapprove');
        Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    });
});

 

