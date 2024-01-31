<?php


use App\Http\Controllers\Buyer\BuyerController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\Transanction\TransactionController;
use App\Http\Controllers\User\UserController;
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

/**
 * Buyers
 */
Route::resource('buyers', BuyerController::class );
/**
 * Sellers
 */
Route::resource('sellers', SellerController::class);
/**
 * Products
 */
Route::resource('products', ProductController::class);
/**
 * Categories
 */
Route::resource('categories', CategoryController::class);
/**
 * Transactions
 */
Route::resource('transactions', TransactionController::class);
/**
 * Users
 */
Route::resource('user', UserController::class);



