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
Route::post('/categories/{id}/update',[CategoryController::class,'update']);

Route::get('/Shops',[ShopController::class,'list']);
Route::get('/Shops/{id}',[ShopController::class,'item']);
Route::post('/Shops/create',[ShopController::class,'create']);
Route::post('/Shops/{id}/update',[ShopController::class,'update']);

Route::get('/Gifts',[GiftController::class,'list']);
Route::get('/Gifts/{id}',[GiftController::class,'item']);
Route::post('/Gifts/create',[GiftController::class,'create']);
Route::post('/Gifts/{id}/update',[GiftController::class,'update']);

Route::get('/Ratings',[RatingController::class,'list']);
Route::get('/Ratings/{id}',[RatingController::class,'item']);
Route::post('/Ratings/create',[RatingController::class,'create']);
Route::post('/Ratings/{id}/update',[RatingController::class,'update']);

Route::get('/Comments',[CommentController::class,'list']);
Route::get('/Comments/{id}',[CommentController::class,'item']);
Route::post('/Comments/create',[CommentController::class,'create']);
Route::post('/Comments/{id}/update',[CommentController::class,'update']);

Route::get('/Users',[UserController::class,'list']);
Route::get('/Users/{id}',[UserController::class,'item']);
Route::post('/Users/create',[UserController::class,'create']);
Route::post('/Users/{id}/update',[UserController::class,'update']);
