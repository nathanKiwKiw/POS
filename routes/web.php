<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

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

Route::get ('/', [HomePageController::class,'index']);


//route prefix
Route::prefix('product')->group(function(){
    Route::get ('/food-beverage', [ProductController::class,'foodBeverage']);
    Route::get ('/beauty-health', [ProductController::class,'beautyHealth']);
    Route::get ('/home-care', [ProductController::class,'homeCare']);
    Route::get ('/baby-kid', [ProductController::class,'babyKid']);
});


//route parameter
Route::get ('/user/{id}/name/{name} ', [UserController::class,'index']);


Route::get ('/sales', [SalesController::class,'index']);