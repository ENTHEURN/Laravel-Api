<?php

use App\Http\Controllers\OrderContoller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

// Router Students =========================================================|||

Route::get('/students', [StudentController::class, 'index'])->name('students');

// Router Products =========================================================|||

Route::get('/products', [ProductController::class, 'index'])->name('products');

// Router Products =========================================================|||

Route::get('/orders', [OrderContoller::class, 'index'])->name('orders');