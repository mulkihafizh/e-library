<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;





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
    return view('index');
});

Route::get('/404', function () {
    return view('404');
})->name('error');

Route::middleware(['isLogin'])->group(function () {
    Route::get('/home', [LibraryController::class, 'index'])->name('home');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::middleware(['isLogin', 'roleCheck:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/users', [DashboardController::class, 'user'])->name('dashboard.users');
    Route::get('/dashboard/books', [BookController::class, 'index'])->name('dashboard.books');
    Route::post('/dashboard/books/store', [BookController::class, 'store'])->name('books.store');
    Route::get('/dashboard/books/{id}/delete', [BookController::class, 'destroy'])->name('books.delete');
    Route::get('/dashboard/categories', [CategoryController::class, 'index'])->name('dashboard.categories');
});

Route::middleware(['isGuest'])->group(function () {
    Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::get('/login', [UserController::class, 'index'])->name('login');
    Route::post('/register/store', [UserController::class, 'store'])->name('register.store');
    Route::post('/login/auth', [UserController::class, 'auth'])->name('auth');
});
