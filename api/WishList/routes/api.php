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

Route::get('/Shops',[ShopController::class,'list']);
Route::get('/Shops/{id}',[ShopController::class,'item']);

Route::get('/Products',[ProductController::class,'list']);
Route::get('/Products/{id}',[ProductController::class,'item']);

Route::get('/Gifts',[GiftController::class,'list']);
Route::get('/Gifts/{id}',[GiftController::class,'item']);

Route::get('/Ratings',[RatingController::class,'list']);
Route::get('/Ratings/{id}',[RatingController::class,'item']);

Route::get('/Comments',[CommentController::class,'list']);
Route::get('/Comments/{id}',[CommentController::class,'item']);

Route::get('/Users',[UserController::class,'list']);
Route::get('/Users/{id}',[UserController::class,'item']);
