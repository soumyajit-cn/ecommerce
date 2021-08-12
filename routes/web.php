<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AttributeController;

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
});
Route::get("/dashboard", [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::resource('products', ProductController::class)->middleware('auth');
Route::resource('categories', CategoryController::class)->middleware('auth');
Route::get('attributes', [AttributeController::class,'index'])->name('attributes.index')->middleware('auth');
Route::get('attributes/edit/{id}', [AttributeController::class,'edit'])->name('attributes.edit')->middleware('auth');
Route::get('attributes/add/{id}', [AttributeController::class,'add'])->name('attributes.add')->middleware('auth');
Route::put('attributes/store/{id}', [AttributeController::class,'store'])->name('attributes.store')->middleware('auth');
