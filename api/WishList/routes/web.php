<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GiftController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/old', function () {
    return view('index');
});

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/admin',[AdminController::class,'index'])->name('dashboard');

Route::get('/admin/category',[CategoryController::class,'index'])->name('category.index');

Route::get('/admin/comment',[CommentController::class,'index'])->name('comment.index');

Route::get('/admin/gift',[GiftController::class,'index'])->name('gift.index');

Route::get('/admin/rating',[RatingController::class,'index'])->name('rating.index');

Route::get('/admin/shop',[ShopController::class,'index'])->name('shop.index');

Route::get('/admin/user',[UserController::class,'index'])->name('user.index');
