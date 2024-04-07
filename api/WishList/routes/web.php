<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GiftController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EditController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/old', function () {
    return view('index');
});

Route::get('/',[HomeController::class,'index'])->name('home');

Route::middleware('auth')->group(function () {  
Route::get('/admin',[AdminController::class,'index'])->name('dashboard');
Route::get('/admin/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/admin/category/{id}/edit', [CategoryController::class, 'edit'])->name('category-edit');
Route::put('/admin/category/{id}/update', [CategoryController::class, 'update'])->name('category-update');
Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('category-store');
Route::delete('/admin/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category-delete');

// Mostrar el formulario de edición
Route::get('/edit', [EditController::class, 'index'])->name('edit.user');

// Procesar la actualización del perfil
Route::put('/edit', [EditController::class, 'update'])->name('edit.user');

Route::get('/admin/comment', [CommentController::class, 'index'])->name('comment.index');
Route::get('/admin/comment/{id}/edit', [CommentController::class, 'edit'])->name('comment-edit');
Route::put('/admin/comment/{id}/update', [CommentController::class, 'update'])->name('comment-update');
Route::post('/admin/comment/store', [CommentController::class, 'store'])->name('comment-store');
Route::delete('/admin/comment/delete/{id}', [CommentController::class, 'destroy'])->name('comment-delete');

// Gifts Routes
Route::get('/admin/gift', [GiftController::class, 'index'])->name('gift.index');
Route::get('/admin/gift/{id}/edit', [GiftController::class, 'edit'])->name('gift-edit');
Route::put('/admin/gift/{id}/update', [GiftController::class, 'update'])->name('gift-update');
Route::post('/admin/gift/store', [GiftController::class, 'store'])->name('gift-store');
Route::delete('/admin/gift/{id}', [GiftController::class, 'destroy'])->name('gift-delete');


Route::get('/admin/rating', [RatingController::class, 'index'])->name('rating.index');
Route::get('/admin/rating/{id}/edit', [RatingController::class, 'edit'])->name('rating.edit');
Route::put('/admin/rating/{id}/update', [RatingController::class, 'update'])->name('rating.update');
Route::post('/admin/rating/store', [RatingController::class, 'store'])->name('rating.store');
Route::delete('/admin/rating/{id}', [RatingController::class, 'destroy'])->name('rating.destroy');


Route::get('/admin/shop',[ShopController::class,'index'])->name('shop.index');
Route::get('/admin/shop/{id}/edit', [ShopController::class, 'edit'])->name('shop.edit');
Route::put('/admin/shop/{id}/update', [ShopController::class, 'update'])->name('shop.update');
Route::post('/admin/shop/store', [ShopController::class, 'store'])->name('shop.store');
Route::delete('/admin/shop/{id}', [ShopController::class, 'destroy'])->name('shop.delete');

Route::get('/admin/user',[UserController::class,'index'])->name('user.index');
Route::get('/admin/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/admin/user/{id}/update', [UserController::class, 'update'])->name('user.update');
Route::post('/admin/user/store', [UserController::class, 'store'])->name('user.store');
Route::delete('/admin/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
});
Auth::Routes();
