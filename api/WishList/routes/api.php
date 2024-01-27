<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\GiftController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\RatingController;
use App\Http\Controllers\Api\ShopController;
use App\Http\Controllers\Api\UserController;
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

Route::get('/categories',[CategoryController::class,'list']);
Route::get('/categories/{id}',[CategoryController::class,'item']);
Route::post('/categories/create',[CategoryController::class,'create']);

Route::get('/Shops',[ShopController::class,'list']);
Route::get('/Shops/{id}',[ShopController::class,'item']);
Route::post('/Shops/create',[ShopController::class,'create']);

Route::get('/Products',[ProductController::class,'list']);
Route::get('/Products/{id}',[ProductController::class,'item']);
Route::post('/Products/create',[ProductController::class,'create']);

Route::get('/Gifts',[GiftController::class,'list']);
Route::get('/Gifts/{id}',[GiftController::class,'item']);
Route::post('/Gifts/create',[GiftController::class,'create']);

Route::get('/Ratings',[RatingController::class,'list']);
Route::get('/Ratings/{id}',[RatingController::class,'item']);
Route::post('/Ratings/create',[RatingController::class,'create']);

Route::get('/Comments',[CommentController::class,'list']);
Route::get('/Comments/{id}',[CommentController::class,'item']);
Route::post('/Comments/create',[CommentController::class,'create']);

Route::get('/Users',[UserController::class,'list']);
Route::get('/Users/{id}',[UserController::class,'item']);
Route::post('/Users/create',[UserController::class,'create']);
