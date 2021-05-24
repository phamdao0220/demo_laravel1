<?php

use App\Http\Controllers\AuthorController;
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
Route::prefix('admin')->group(function () {
        Route::get('/', [AuthorController::class, 'index'])->name('list.author');
        Route::get('/add', [AuthorController::class, 'add'])->name('add.author');
        Route::post('/add', [AuthorController::class, 'store'])->name('store.author');
        Route::get('/edit/{id}', [AuthorController::class, 'edit'])->name('edit.author');
        Route::post('/edit/{id}', [AuthorController::class, 'update'])->name('update.author');
        Route::get('/delete/{id}', [AuthorController::class, 'delete'])->name('delete.author');
});
