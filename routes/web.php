<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

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
Route::get('users', [UserController::class,'index'])->name('users')->middleware('auth');
Route::post('/getproduct', [DashboardController::class,'getproduct'])->name('getproduct')->middleware('auth');
Route::post('/addtocart', [DashboardController::class,'addtocart'])->name('addtocart')->middleware('auth');
Route::get('/productdetail', [DashboardController::class,'productdetail'])->name('productdetail')->middleware('auth');
