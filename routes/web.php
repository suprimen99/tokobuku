<?php

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\DashboardController;

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
})->middleware('auth');

Route::middleware('onlyguest')->group(function() {

    Route::get('login',[AuthController::class,'login'])->name('login');
    Route::Post('login',[AuthController::class,'Authenticate']);
    Route::get('register',[AuthController::class,'register']);
});

Route::middleware('auth')->group(function() {

    Route::get('logout',[AuthController::class, 'logout']);
    Route::get('dashboard',[DashboardController::class,'index'])->middleware(['only_admin']);
    Route::get('profile',[Usercontroller::class,'index'])->middleware(['only_client' ]);

    Route::get('books',[BooksController::class,'index']);
});
