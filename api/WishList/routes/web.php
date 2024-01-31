<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/old', function () {
    return view('index');
});

Route::get('/',[HomeController::class,'index'])->name('home');