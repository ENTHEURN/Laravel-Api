<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\OrderContoller;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Router Students =========================================================|||

Route::get('/students/list', [StudentController::class, 'index'])->name('students.list');
Route::get('/students/show/{id}', [StudentController::class, 'show'])->name('students.show');
Route::post('/students/create', [StudentController::class, 'store'])->name('students.create');
Route::put('/students/update/{id}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/delete/{id}', [StudentController::class, 'destroy'])->name('students.delete');

// Router Products =========================================================|||

Route::get('/products/list', [ProductController::class, 'index'])->name('products');
Route::get('/products/show/{id}', [ProductController::class, 'show'])->name('products.show');
Route::post('/products/create', [ProductController::class, 'store'])->name('products');
Route::put('/products/update/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/delete/{id}', [ProductController::class, 'destroy'])->name('products.delete');

// Router Products =========================================================|||

Route::get('/orders/list', [OrderContoller::class, 'index'])->name('orders');
Route::get('/orders/show/{id}', [OrderContoller::class, 'show'])->name('orders.show');
Route::post('/orders/create', [OrderContoller::class, 'store'])->name('orders');
Route::put('/orders/update/{id}', [OrderContoller::class, 'update'])->name('orders.update');
Route::get('/orders/delete/{id}', [OrderContoller::class, 'destroy'])->name('orders.delete');


// Router Category ========================================================|||


Route::get('/category/list',[CategoryController::class,'index'])->name('category.list');
Route::post('/category/create', [CategoryController::class, 'store'])->name('category.create');
Route::get('/category/show/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');