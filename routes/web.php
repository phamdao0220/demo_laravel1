<?php

use App\Http\Controllers\AuthorController;
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
Route::get('/', function (){
   return view('back_end.admin.index');
});
Route::prefix('/login',function (){
});
Route::prefix('admin')->group(function () {
    Route::get('/',[HomeController::class])->name('login');
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
//        Route::get('/search', [CategoryController::class, 'search'])->name('search.category');
    });
});
