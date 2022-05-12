<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::resource('products', ProductController::class);

// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
//Route::get('/products', [ProductController::class, 'index']);
//Route::get('/products/{id}', [ProductController::class, 'show']);
//Route::get('/products/search/{name}', [ProductController::class, 'search']);
Route::get('/all-listings', [ListingController::class, 'index']);
Route::get('/seller-listings', [ListingController::class, 'index2']);
Route::get('/listings/{id}', [ListingController::class, 'show']);


// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
//    Route::post('/products', [ProductController::class, 'store']);
//    Route::put('/products/{id}', [ProductController::class, 'update']);
//    Route::delete('/products/{id}', [ProductController::class, 'destroy']);
    Route::post('/new-order', [OrderController::class, 'store']);
    Route::get('/my-orders', [OrderController::class, 'index']);
    Route::post('/new-listing', [ListingController::class, 'store']);
    Route::get('/your-listings', [ListingController::class, 'index3']);
    Route::get('/orders-by-seller', [ListingController::class, 'sellerOrders']);
    Route::post('/delete-listing/{id}', [ListingController::class, 'destroy']);

    Route::get('/admin/orders-by-seller', [ListingController::class, 'sellerOrders']);

    Route::post('/logout', [AuthController::class, 'logout']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
