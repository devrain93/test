<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');

Route::post('/category', [CategoryController::class, 'store'])->name('category.store');

Route::get('/category/{category}/edit',[CategoryController::class, 'edit'])->name('category.edit');

Route::put('/category/{category}',[CategoryController::class, 'update'])->name('category.update');

Route::get('/category/{category}', [CategoryController::class, 'delete'])->name('category.delete');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');




