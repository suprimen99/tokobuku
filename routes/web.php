<?php

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\RentlogController;
use App\Http\Controllers\CategoryController;
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
    Route::Post('register',[AuthController::class,'registerProcess']);
});

Route::middleware('auth')->group(function() {
    Route::get('logout',[AuthController::class, 'logout']);
    Route::get('dashboard',[DashboardController::class,'index'])->middleware(['only_admin']);
    Route::get('profile',[Usercontroller::class,'profile'])->middleware(['only_client' ]);
    Route::get('books',[BooksController::class,'index']);

    // categories
    Route::get('categories',[CategoryController::class,'index']);
    Route::get('category-add',[CategoryController::class,'add']);
    Route::post('category-add',[CategoryController::class,'store']);
    Route::get('category-edit/{slug}',[CategoryController::class,'edit']);
    Route::put('/category-edit/{slug}',[CategoryController::class,'update']);
    Route::get('/category-delete/{slug}',[CategoryController::class,'delete']);
    Route::get('/category-destroy/{slug}',[CategoryController::class,'destroy']);
    Route::get('category-deleted',[CategoryController::class,'deletecategory']);
    Route::get('category-restore/{slug}',[CategoryController::class,'restore']);

    Route::get('users',[UserController::class,'index'])->name('users');
    Route::get('rent_logs',[RentlogController::class,'index'])->name('rent_logs');
});
