<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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
Route::get('/login',[HomeController::class,'adminLogin'])->name('homeLogin');
Route::post('/login',[HomeController::class,'postLoginAdmin'])->name('postLogin');
Route::get('/logout',[HomeController::class,'logout'])->name('logoutAdmin');
Route::prefix('admin')->group(function () {
    Route::get('/', [HomeController::class, 'homeIndex'])->name('admin');
    Route::prefix('author')->group(function () {
        Route::get('/', [AuthorController::class, 'index'])->name('list.author');
        Route::get('/add', [AuthorController::class, 'add'])->name('add.author');
        Route::post('/add', [AuthorController::class, 'store'])->name('store.author');
        Route::get('/edit/{id}', [AuthorController::class, 'edit'])->name('edit.author');
        Route::post('/edit/{id}', [AuthorController::class, 'update'])->name('update.author');
        Route::get('/delete/{id}', [AuthorController::class, 'delete'])->name('delete.author');
        Route::get('/search', [AuthorController::class, 'search'])->name('search.author');
    });
    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('list.category');
        Route::get('/add', [CategoryController::class, 'add'])->name('add.category');
        Route::post('/add', [CategoryController::class, 'store'])->name('store.category');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit.category');
        Route::post('/edit/{id}', [CategoryController::class, 'update'])->name('update.category');
        Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('delete.category');
        Route::get('/search', [CategoryController::class, 'search'])->name('search.category');
    });

    Route::prefix('book')->group(function () {
        Route::get('/', [BookController::class, 'index'])->name('list.book');
        Route::get('/add', [BookController::class, 'add'])->name('add.book');
        Route::post('/add', [BookController::class, 'store'])->name('store.book');
        Route::get('/edit/{id}', [BookController::class, 'edit'])->name('edit.book');
        Route::post('/edit/{id}', [BookController::class, 'update'])->name('update.book');
        Route::get('/delete/{id}', [BookController::class, 'delete'])->name('delete.book');
        Route::get('/search', [BookController::class, 'search'])->name('search.book');
    });
});
Route::get('loginUser',[AdminController::class,'userLogin'])->name('login');
Route::post('loginUser',[AdminController::class,'postLoginUser'])->name('userLogin');
Route::get('registration', [AdminController::class, 'registration'])->name('registration');
Route::post('registration', [AdminController::class, 'postRegistration'])->name('postRegistration');
Route::get('/', [AdminController::class, 'home'])->name('user');
Route::prefix('user')->group(function () {
    Route::get('/', [AdminController::class, 'home'])->name('user');
    Route::get('/book', [AdminController::class, 'index'])->name('book');
});
